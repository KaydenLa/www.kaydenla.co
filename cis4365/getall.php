<?php

include '/home/bitnami/creds/conncis4365.php';


$GetTableList;

sqlquery($con); 

function sqlquery($con){

$sql = "SHOW TABLES";

$result = $con->query($sql);

if ($result->num_rows > 0) {

display_data($result, $con);
} 

else {

printf(' Error 1: SQL table not found.<br />');

}

}


// After SQL Query, display data

function display_data($result, $con) {

$tablelist =[];

$output = '<table style="background-color: #3a3a3a;">';
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

echo '<p style="color:red">', $current_table ,'</p>';

$output = '<table style="background-color: #3a3a3a;">';

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
