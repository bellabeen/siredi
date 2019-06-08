<?php
include "../include/connect.php";
// include "../include/session.php";

$id_user		= $_POST["id_user"];
$username	 	= $_POST["username"];
$password		= $_POST["password"];
$level			= $_POST["level"];

if ($edit = mysqli_query($connect, "UPDATE user SET id_user='$id_user', username='$username', password='$password', level='$level' WHERE id_user='$id_user'")){
		header("Location: users.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>


<!-- <?php
include "../koneksi.php";

$no_tri 			= $_POST["no_tri"];
$judultri 			= $_POST["judultri"];
$tanggal_mulai 		= $_POST["tanggal_mulai"];
$tanggal_selesai 	= $_POST["tanggal_selesai"];
$waktu				= $_POST["waktu"];
$kategori 			= $_POST["kategori"];
$indek_satis 		= $_POST["indek_satis"];

if ($edit = mysqli_query($koneksi, "UPDATE training SET  judultri='$judultri', tanggal_mulai='$tanggal_mulai',
 tanggal_selesai='$tanggal_selesai', waktu='$waktu', kategori='$kategori', indek_satis='$indek_satis' WHERE no_tri='$no_tri'")){
		header("Location: training.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($koneksi));

?> -->