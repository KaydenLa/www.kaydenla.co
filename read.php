<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - hello, World!</title>
</head>
<body>
        <h1>TESTING conn</h1>
    <div>
    <?php
    include '/home/bitnami/creds/conn.php';

    $current_table = "ITEM";
    sqlquery($current_table, $con); 
    sqlquery('WAREHOUSE',$con);
    sqlquery("CUSTOMER",$con);
    
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