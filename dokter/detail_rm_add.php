<?php
include "../include/connect.php";
include "../include/session.php"; 

// $nik = $_GET["nik"];

$no_rm	    	= $_POST["no_rm"];
$tanggal 		= $_POST["tanggal"];
$diagnosa 	    = $_POST["diagnosa"];
$obat 			= $_POST["obat"];
$nik			= $_POST["nik"];
$no_reg			= $_POST["no_reg"];

if ($add = mysqli_query($connect, "INSERT INTO rm VALUES ('$no_rm', '$tanggal', '$diagnosa', '$obat', '$nik', '$no_reg')")){
		header("Location: rm.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>