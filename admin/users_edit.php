<?php
include "../include/connect.php";
// include "../include/session.php";

$id_user		= $_POST["id_user"];
$username	 	= $_POST["username"];
$password		= $_POST["password"];
$level			= $_POST["level"];

if ($edit = mysqli_query($connect, "UPDATE user SET id_user='$id_user', username='$username', password='$password', level='$level' WHERE id_user='$id_user'")){
		header("Location: users.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>