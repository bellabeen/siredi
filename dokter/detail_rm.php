<?php
include "../include/connect.php";
include "../include/session.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Record | RekamMedis</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- jQuery 2.1.4 -->
  <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/app.min.js"></script>
    <!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../GGP.ico">
    <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <header class="main-header">
  <!-- Logo -->
<div class="logo">
<span class="logo-mini"><img src="../assets/images/logo.png" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg"><b>RekamMedis</b></span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="../assets/foto/<?php// echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">-->
              <img src="../assets/images/avatar0.jpg" class="user-image" alt="Foto">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
	              <img src="../assets/images/avatar0.jpg" class="img-circle" alt="images">
                <p style="text-transform:capitalize;">Hi <?php echo $_SESSION['username'];?></p>
                <p>Welcome To RekamMedis</p>
             </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default     btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-danger btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/images/avatar0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
				<p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">					
						<li class="header"><h4><b><center>Manajemen RekamMedis</center></b></h4></li>
            <li class="active"><a href="home.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="rm.php"><i class="fa fa-file-pdf-o"></i><span>RekamMedis</span></a></li>
            <li><a href="obat.php"><i class="fa fa-list-ul"></i><span>Data Obat</span></a></li>
          </ul>
        </section>
    <!-- /.sidebar -->
  </aside>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Record Pasien
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  	<br></br>

					<tbody>
						<?php
						$nik = $_GET["nik"];
						$querypasien = mysqli_query($connect, "SELECT * FROM pasien WHERE nik='$nik'");
						if($querypasien == false) {
							die("Terjadi Kesalahan : ".mysqli_error($connect));
						}
						while ($pasien = mysqli_fetch_array($querypasien)){
							echo "

							<div class='content'>
							<table class='table-form' border='0' width='100%' cellpadding='0' cellspacing='0'>
							<thead>
									<tr>
									<td width='20%'>NIK</td>
									<td>: </td>
									<td>$pasien[nik]</td>
									</tr>
									<tr>
									   <td>Nama Lengkap</td>
									<td width='1%'>:</td>
									<td>$pasien[nama]</td>
								 </tr>
								 <tr> 
									   <td>Umur</td>
									<td width='1%'>:</td>
									<td>$pasien[umur] Tahun</td>
								 </tr>
								 <tr>
									<td>Tanggal Lahir</td>
									   <td width='1%'>:</td>
									<td>$pasien[tgl_lahir]</td>
								 </tr>
								 <tr>
									<td>Alamat</td>
									<td width='1%'>:</td>
									<td>$pasien[alamat]</td>
								 </tr>
								 <tr> 
									<td>No Telpon</td>
									<td width='1%'>:</td>
									<td>$pasien[no_telpon]</td>
								 </tr>
							</thead>";
						}
						?>
					</tbody>
					
					
						</div>
						<a href="rm.php" class="btn">Kembali</a>
						
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
	
		</div><!-- /.content-wrapper -->
	</div><!-- ./wrapper -->