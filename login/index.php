<!DOCTYPE html>

<html>

	<head>

	<?php

        include '/opt/bitnami/apache/htdocs/partials/head.php';

    ?>

    <title>Login - Kayden La</title>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        <link href="/login/style.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		  <?php

        include '/opt/bitnami/apache/htdocs/partials/nav.php';

    ?>

    <div class="padding">

	<div class="login">

			<h1>Login</h1>

			<form action="authenticate.php" method="post">

				<label for="username">

					<i class="fas fa-user"></i>

				</label>

				<input type="text" name="username" placeholder="Username" id="username" required>

				<label for="password">

					<i class="fas fa-lock"></i>

				</label>

				<input type="password" name="password" placeholder="Password" id="password" required>

				<input type="submit" value="Login">

			</form>

		</div>


	</div>

	</body>

</html>
