<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_user = $_GET['id_user'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM user WHERE id_user='$id_user'")){
	header("Location: users.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>