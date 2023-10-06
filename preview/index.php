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

        <h1>Overview of DBMS</h1>
    <div>
    <?php
    include '/home/bitnami/creds/conn.php';
    $items = ["WAREHOUSE","WHIL","ITEM","IIL","INVOICE","CUSTOMER","IIPL","PACKAGE","PTL","TRUCK","EMPLOYEE"];
    foreach($items as $current_table){
        sqlquery($current_table, $con); 

    }
    
    function sqlquery($data, $con){
        $sql = "SELECT * FROM $data";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            display_data($result);
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