<?php

include "../include/connect.php";
include "../include/session.php"; 

$no_reg = $_GET['no_reg'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM dokter WHERE no_reg='$no_reg'")){
	header("Location: dokter.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>