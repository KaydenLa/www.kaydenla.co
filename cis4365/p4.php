<?php

include '/home/bitnami/creds/conncis4365.php';


$GetTableList;

sqlquery($con); 

function sqlquery($con){

$sql = 'SELECT BUDGET.BUDGET_ID, BUDGET.START_WEEK, SUPPLIER.SUPPLIER_NAME, sum(EXPENSE.EXPENSE_AMOUNT) as TOTAL_EXPENSE FROM EQUIPMENT_INVENTORY RIGHT JOIN EQUIPMENTLIST on EQUIPMENT_INVENTORY.EQUIP_INVENTORY_ID =EQUIPMENTLIST.EQUIP_INVENTORY_ID right join BUDGET on BUDGET.BUDGET_ID=EQUIPMENT_INVENTORY.BUDGET_ID RIGHT JOIN EQUIPMENT on EQUIPMENT.EQUIPMENT_ID = EQUIPMENTLIST.EQUIPMENT_ID RIGHT JOIN EQUIPMENTSUPPLIER ON EQUIPMENTSUPPLIER.EQUIPMENT_ID = EQUIPMENT.EQUIPMENT_ID RIGHT JOIN SUPPLIER ON SUPPLIER.SUPPLIER_ID = EQUIPMENTSUPPLIER.SUPPLIER_ID right join EXPENSE on EXPENSE.EXPENSE_ID = EQUIPMENT_INVENTORY.EXPENSE_ID GROUP by SUPPLIER_NAME;';

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

echo '<p style="color:red">','Problem 4' ,'</p>';
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
