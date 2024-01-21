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
    include '/home/bitnami/creds/conncis4365.php';
    $items = ["CUSTOMER"];
    foreach($items as $current_table){
        sqlquery($current_table, $con); 

    }
    
    function sqlquery($current_table, $con){
        $sql = "SELECT * FROM $current_table";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            display_data($result, $current_table);
        } 
        else {
            printf('No record found.<br />');
        }
    }
// After SQL Query, display data
    function display_data($result, $current_table) {
	echo  $current_table;
        $output = '<table>';
        foreach($result as $key => $var) {
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
