<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include '/opt/bitnami/apache/htdocs/partials/head.php';
    ?>
    <title>CIS4365 DBMS Structure</title>
</head>
<body>
    <?php
        include '/opt/bitnami/apache/htdocs/partials/nav.php';
    ?>

        <h1>Overview of Group4 DBMS</h1>
    <div>
	<?php
	include '/home/bitnami/htdocs/cis4365/getall.php';
	?>
    </div>
</body>
</html>
