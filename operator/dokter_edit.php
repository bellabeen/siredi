<?php
include "../include/connect.php";


$no_reg			= $_POST["no_reg"];
$nama	 	    = $_POST["nama"];
$alamat   		= $_POST["alamat"];
$no_telpon      = $_POST["no_telpon"];
$jenis_kel      = $_POST["jenis_kel"];
$spesialist     = $_POST["spesialist"];


if ($edit = mysqli_query($connect, "UPDATE dokter SET no_reg='$no_reg', nama='$nama', alamat='$alamat', no_telpon='$no_telpon', jenis_kel='$jenis_kel', 
		spesialist='$spesialist' WHERE no_reg='$no_reg'")){
			header("Location: dokter.php");
			exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>