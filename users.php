<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
	// checking is s user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php'); 
	}

	$user_list = '';

	//getting the list of users
	$query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY first_name";
	$users = mysqli_query($connection, $query);

	if ($users) {
		while ($user = mysqli_fetch_assoc($users)) {
			
		}

	} else {
		echo "Database query failed.";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet"  href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">User Managemnt System</div>
		<div class="loggedin">Welcome Username <?php $_SESSION['first_name'];?>! <a href="logout.php">Log Out</a></div>
	</header>

	<main>
	<h1>Users <span><a href="add-user.php">+ Add New</a></span></h1>

	<table class="masterlist">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Last Login</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php echo $user_list; ?>
		
	</table>

	</main>
</body>
</html>