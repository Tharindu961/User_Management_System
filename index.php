<? php require_once('inc/connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In - User Management System</title>
</head>
<body>
	<div class="login">

		<form action="index.php" method="post">
			<fieldset>
				<legend><h1>Log In</h1></legend>
			</fieldset>
		</form>

	</div>
</body>
</html>
<?php mysqli_close($connection); ?>