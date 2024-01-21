<?php

include '/home/bitnami/htdocs/partials/loginlanding.php';

?>

<!DOCTYPE html>

<html>

	<head>

	<?php

        include '/opt/bitnami/apache/htdocs/partials/head.php';

    ?>

    <title>User Home</title>

	</head>

	<body>

		  <?php

        include '/opt/bitnami/apache/htdocs/partials/nav.php';

    ?>

    <div class="padding">

	<nav class="navtop">

			<div>

				<a href="/home/"><i class="fas fa-user-circle"></i>Home</a>
				<a href="/profile/"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="/logout/"><i class="fas fa-sign-out-alt"></i>Logout</a>

			</div>

		</nav>

		<div class="content">

			<h2>Home Page</h2>

			<p>Welcome back, <?=$_SESSION['name']?>!</p>
			
			<div style="height:80vh;">
				<embed type="text/html" src="http://kaydenla.co/file.php" width="100%" height="100%">
			</div>

		</div>


	</div>

	</body>



</html>
