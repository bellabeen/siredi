<?php
include "../include/connect.php";
include "../include/session.php"; 

$nik = $_GET["nik"];

$nik 	    	= $_POST["nik"];
$no_rm	    	= $_POST["no_rm"];
$tanggal 		= $_POST["tanggal"];
$diagnosa 	    = $_POST["diagnosa"];
$obat 			= $_POST["obat"];
$no_reg 		= $_POST["no_reg"];

if ($add = mysqli_query($connect, "INSERT INTO rm VALUES ('{$_GET['$nik']}', '$no_rm', '$tanggal', '$diagnosa', '$obat', '$no_reg')")){
		header("Location: detail_rm.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>