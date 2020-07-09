<?php require_once('inc/connection.php'); ?>

<?php 

	// check for from submission
	if (isset($_POST['submit'])){

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) <1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="login">

		<form action="index.php" method="post">
			<fieldset>
				<legend><h1>Log In</h1></legend>

				<!-- <p class="error">Invalid Username / password</p> -->

				<p>
					<label for="">Username</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>
				<p>
					<label for="">Password</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>
				<p>
					<button type="submit" name="submit">Log In</button>
				</p>

			</fieldset>
		</form>

	</div>
</body>
</html>

<?php mysqli_close($connection); ?>