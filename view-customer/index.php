<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include '/opt/bitnami/apache/htdocs/partials/head.php';
    ?>
    <title>DBMS Structure</title>
</head>
<body>
    <?php
        include '/opt/bitnami/apache/htdocs/partials/nav.php';
    ?>

        <h1>View Customer Informaion from DBMS</h1>
    <div>
    <?php
    include '/home/bitnami/creds/conn.php';
    echo "Name:<br>";
    $selected = "FNAME";
    $table = "CUSTOMER";
    $fromwhere = "CUSTOMER_ID";
    $value = 538;
    sqlquery($selected, $table, $fromwhere, $value, $con); 
    
    echo "<br><br>Invoice Number:<br>";
    $invoice_id = null;
    $selected = "INVOICE_ID";
    $table = "INVOICE";
    $fromwhere = "CUSTOMER_ID";
    $value = 538;
    $invoice_id = sqlquery($selected, $table, $fromwhere, $value, $con); 
    echo $invoice_id;

    echo "<br><br>Item Number:<br>";
    $selected = "ITEM_ID";
    $table = "IIL";
    $fromwhere = "INVOICE_ID";
    $value = $invoice_id;
    $item_id = sqlquery($selected, $table, $fromwhere, $value, $con); 
    echo $item_id;



    function sqlquery($selected, $table, $fromwhere, $value, $con){
        $myQuery = ("SELECT $selected from $table WHERE $fromwhere = $value");
        $result = $con->query($myQuery);
        if ($result->num_rows > 0) {
            foreach($result as $row) {
                //echo $row['column_name']; // Print a single column data
                $invoice_id = $row[$selected];
                echo $invoice_id;       // Print the entire row data
            }
            return $invoice_id;
        } 
        else {
            printf('No record found.<br />');
        }
    }
// Check connection
    function display_data($data) {
        $output = '<table>';
        foreach($data as $key => $var) {
            $output .= '<tr>';
            foreach($var as $k => $v) {
                if ($key === 0) {
                    $output .= '<td><strong>' . $k . '</strong></td>';
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
    </div>
</body>
</html>