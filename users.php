<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">User Managemnt System</div>
		<div class="loggedin">Welcome Username <?php $_SESSION['first_name'];?>! <a href="logout.php">Log Out</a></div>
	</header>
	<h1>Users</h1>
</body>
</html>