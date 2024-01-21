<?php

include '/home/bitnami/creds/conncis4365.php';


$GetTableList;

sqlquery($con); 

function sqlquery($con){

$sql = "SELECT `ORDER`.CUSTOMER_ID, count(`ORDER`.CUSTOMER_ID) AS TOTAL_ORDERS 
FROM `ORDER` INNER JOIN LOYALTYPROGRAM ON LOYALTYPROGRAM.CUSTOMER_ID = 
`ORDER`.CUSTOMER_ID WHERE ENROLLED=FALSE GROUP by CUSTOMER_ID HAVING COUNT(*) 
>2";

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

echo '<p style="color:red">','Problem 1' ,'</p>';
echo '<p>Customers with 3+ orders, but not enrolled in the loyaltyprogram.</p>';

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
