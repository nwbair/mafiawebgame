<?php include_once("connect.php");

if (isset($_SESSION['user_id'])) { // Login OK, update last active

	$sql = "UPDATE users SET lastactive = NOW() WHERE id = '" . mysqli_real_escape_string($connection, $_SESSION['user_id']) . "'";
	mysqli_query($connection, $sql);
	
} else {
	header("Location: index.php");
	exit();
}

?>