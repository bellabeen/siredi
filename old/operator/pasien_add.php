<?php
include "../include/connect.php";
include "../include/session.php"; 

$nik	 	    = $_POST["nik"];
$nama		    = $_POST["nama"];
$umur	 		= $_POST["umur"];
$tgl_lahir      = $_POST["tgl_lahir"];
$alamat			= $_POST["alamat"];
$no_telpon		= $_POST["no_telpon"];

if ($add = mysqli_query($connect, "INSERT INTO pasien VALUES ('$nik', '$nama', '$umur', '$tgl_lahir', '$alamat', '$no_telpon')")){
		header("Location: pasien.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>