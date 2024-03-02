<?php
include "../include/connect.php";
include "../include/session.php"; 

$no_reg 	    = $_POST["no_reg"];
$nama	        = $_POST["nama"];
$alamat 		= $_POST["alamat"];
$spesialist 	= $_POST["spesialist"];
$no_telpon      = $_POST["no_telpon"];
$jenis_kel      = $_POST["jenis_kel"];

if ($add = mysqli_query($connect, "INSERT INTO dokter VALUES ('$no_reg', '$nama', '$alamat', '$spesialist', '$no_telpon', '$jenis_kel')")){
		header("Location: dokter.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>