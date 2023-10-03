<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1>TESTING conn</h1>
    <div>
    <?php
    include '/home/bitnami/creds/conn.php';
    echo "Marked A";
    
    $sql = "SELECT * FROM TEST";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           printf("Returned is: %s and %s", 
              $row["testint"], $row["testvarchar"]); 
        }
     } else {
        printf('No record found.<br />');
     }
// Check connection
?>
    </div>
</body>
</html>