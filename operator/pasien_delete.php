<?php

include "../include/connect.php";
include "../include/session.php"; 

$nik = $_GET['nik'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM pasien WHERE nik='$nik'")){
	header("Location: pasien.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>