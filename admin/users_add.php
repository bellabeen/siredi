<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_user 	    = $_POST["id_user"];
$username	    = $_POST["username"];
$password 		= $_POST["password"];
$level 	        = $_POST["level"];

if ($add = mysqli_query($connect, "INSERT INTO user VALUES ('$id_user', '$username', '$password', '$level')")){
		header("Location: users.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>