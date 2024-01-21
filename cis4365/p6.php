<?php

include '/home/bitnami/creds/conncis4365.php';


$GetTableList;

sqlquery($con); 

function sqlquery($con){

$sql = "SELECT P.TITLE, SUM(IPRICE.DEC_SALES) AS DECEMBER_SALES, SUM(IPRICE.NOV_SALES) AS NOVEMBER_SALES, (SUM(IPRICE.DEC_SALES) - SUM(IPRICE.NOV_SALES)) AS SALES_DIFFERENCE FROM (SELECT IP.PRODUCT_ID, MAX(CASE WHEN MONTH(O.DATE) = 12 THEN O.TOTAL_COST ELSE 0 END) AS DEC_SALES, MAX(CASE WHEN MONTH(O.DATE) = 11 THEN O.TOTAL_COST ELSE 0 END) AS NOV_SALES FROM `ORDER` O JOIN INVOICE I ON O.ORDER_ID = I.ORDER_ID JOIN INVOICEPRODUCT IP ON I.INVOICE_ID = IP.INVOICE_ID WHERE O.DATE BETWEEN '2023-12-01' AND '2023-12-31' OR O.DATE BETWEEN '2023-11-01' AND '2023-11-30' GROUP BY IP.PRODUCT_ID) IPRICE JOIN PROMOTION P ON IPRICE.PRODUCT_ID = P.SEASONALITEM_ID WHERE P.PROMOTION_ID = 200 GROUP BY P.TITLE;";

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

echo '<p style="color:red">','Problem ' ,'</p>';
echo '<p>.</p>';

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
