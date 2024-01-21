<?php

include '/home/bitnami/htdocs/partials/loginlanding.php';

include '/home/bitnami/creds/logincreds.php';


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());

}

// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.

$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');

// In this case we can use the account ID to get the account info.

$stmt->bind_param('i', $_SESSION['id']);

$stmt->execute();

$stmt->bind_result($password, $email);

$stmt->fetch();

$stmt->close();

?>

<!DOCTYPE html>

<html>

<head>

	<?php

        include '/opt/bitnami/apache/htdocs/partials/head.php';

    ?>

    <title>My Profile</title>

	</head>

	<body>

		  <?php

        include '/opt/bitnami/apache/htdocs/partials/nav.php';

    ?>

    <div class="padding">

	<nav class="navtop">

			<div>

				<h1>Website Title</h1>

				<a href="/profile/"><i class="fas fa-user-circle"></i>Profile</a>

				<a href="/logout/"><i class="fas fa-sign-out-alt"></i>Logout</a>

			</div>

		</nav>

		<div class="content">

			<h2>Profile Page</h2>

			<div>

				<p>Your account details are below:</p>

				<table>

					<tr>

						<td>Username:</td>

						<td><?=$_SESSION['name']?></td>

					</tr>

					<tr>

						<td>Password:</td>

						<td><?=$password?></td>

					</tr>

					<tr>

						<td>Email:</td>

						<td><?=$email?></td>

					</tr>

				</table>

			</div>

		</div>


	</div>

	</body>


</html>
