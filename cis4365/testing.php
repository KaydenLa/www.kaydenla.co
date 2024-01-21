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
    sqlquery($con); 
    
    function sqlquery($con){
        $sql = "SHOW TABLES";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            display_data($result);
        } 
        else {
            printf('No record found.<br />');
        }
    }
// After SQL Query, display data
    function display_data($result) {
	$tablelist =[];
        $output = '<table>';
        foreach($result as $key => $var) {
            $output .= '<tr>';
            foreach($var as $k => $v) {
                if ($key === 0) {
                } else {
		$tablelist[]  = $v;
                    $output .= '<td>' . $v . '</td>';
                }
            }
            $output .= '</tr>';
        }
        $output .= '</table>';
        echo $output;
	foreach($tablelist as $table){
	echo $table;
    	};
}

?>
    </div>
</body>
</html>
