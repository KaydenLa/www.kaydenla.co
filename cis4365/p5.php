<?php

include '/home/bitnami/creds/conncis4365.php';


$GetTableList;

sqlquery($con); 

function sqlquery($con){

$sql = 'WITH AVGRATINGS AS (SELECT PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_TITLE, AVG(COALESCE(RATING.RATING_STARS, 0)) AS AVG_RATING FROM PRODUCT LEFT JOIN RATING ON PRODUCT.PRODUCT_ID = RATING.PRODUCT_ID GROUP BY PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_TITLE) SELECT AVGRATINGS.PRODUCT_ID, AVGRATINGS.PRODUCT_TITLE, AVGRATINGS.AVG_RATING FROM AVGRATINGS WHERE AVGRATINGS.AVG_RATING IS NOT NULL ORDER BY AVGRATINGS.AVG_RATING DESC LIMIT 3;';

$result = $con->query($sql);

if ($result->num_rows > 0) {

display_data2($result, $con);
} 

else {

printf(' Error 1: SQL table not found.<br />');

}

}


// After SQL Query, display data

function display_data($result, $con) {

$tablelist =[];

$output = '<table>';
foreach($result as $key => $var) {

$output .= '<tr>';

foreach($var as $k => $v) {

//if ($key === 0) {

//} else {

$tablelist[]  = $v;

$output .= '<td>' . $v . '</td>';

//}

}

$output .= '</tr>';

}

$output .= '</table>';

$DisplayRESULTSofGETTINGtABLE;

foreach($tablelist as $current_table){

sqlquery2($current_table, $con); 

};

}
function sqlquery2($current_table, $con){

$sql = "SELECT * FROM `$current_table`";

$result = $con->query($sql);

if ($result->num_rows > 0) {

display_data2($result, $current_table);

} 

else {
display_data2($result, $current_table);
printf("Error 2: Table $current_table is empty.<br><br>");

}

}

// After SQL Query, display data
function display_data2($result, $current_table) {

echo '<p style="color:red">','Problem 5' ,'</p>';
echo '<p>Find the top rated products.</p>';

$output = '<table>';

foreach($result as $key => $var) {

  $output .= '<tr>';

  foreach($var as $k => $v) {

    if ($key === 0) {

      $output .= '<th><strong>' . $k . '</strong></th>';
    } else {

      $output .= '<td>' . $v . '</td>';

   }
}
    $output .= '</tr>';   
  }
  $output .= '</table>';

  echo $output;
}


?>
