<?php
include "../include/connect.php";


$nik			= $_POST["nik"];
$nama	 	    = $_POST["nama"];
$umur   		= $_POST["umur"];
$tgl_lahir      = $_POST["tgl_lahir"];
$alamat         = $_POST["alamat"];
$no_telpon      = $_POST["no_telpon"];


if ($edit = mysqli_query($connect, "UPDATE pasien SET nik='$nik', nama='$nama', umur='$umur', tgl_lahir='$tgl_lahir', 
alamat='$alamat', no_telpon=$no_telpon WHERE nik='$nik'")){
		header("Location: pasien.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>