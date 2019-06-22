<?php
include "../include/connect.php";
include "../include/session.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Dokter | RekamMedis</title>
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
						<li class="header"><h4><b><center>Manajemen Dokter</center></b></h4></li>
            <li class="active"><a href="home.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="users.php"><i class="fa fa-user"></i><span>User</span></a></li>
            <li><a href="dokter.php"><i class="fa fa-medkit"></i><span>Dokter</span></a></li>
            <li><a href="pasien.php"><i class="fa fa-users"></i><span>Pasien</span></a></li>
          </ul>
        </section>
    <!-- /.sidebar -->
  </aside>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Dokter
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
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "detail_dokter.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
<!-- Modal Popup Dosen -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Dokter</h4>
					</div>
					<div class="modal-body">
						<form action="users_add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
							<div class="form-group">
								<label>Nomor Registrasi Dokter</label>
									<div class="input-group">
										
											<i class=""></i>
										</div>
										<input name="no_reg" type="text" class="form-control" placeholder=""/>
									
							</div>
							<div class="form-group">
								<label>Nama Lengkap</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<input name="nama" type="text" class="form-control" placeholder=""/>
                </div>
                            
                <div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<input name="alamat" type="text" class="form-control" placeholder=""/>
								</div>
                          
									
									<!-- <div class="form-group">
									<label>Jenis Dokter</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class=""></i>
										</div>
										<select name="spesialist" class="form-control">
										<option value='umum'>Dokter Umum</option>
										<option value='anak'>Spesialist Anak</option>
										<option value='anastesi'>Spesialist Anastesi</option>
										<option value='andrologi'>Spesialist Andrologi</option>
										<option value='bedah'>Spesialist Bedah</option>
										<option value='bedah_anak'>Spesialist Bedah Anak</option>
										<option value='bedah_toraks'>Spesialist Bedah Toraks</option>
										<option value='bedah_mulut'>Spesialist Bedah Mulut</option>
										<option value='bedah_plastik'>Spesialist Plastik</option>
										<option value='bedah_syaraf'>Spesialist Syaraf</option>
										<option value='forensik'>Spesialist Forensik</option>
										
										<option value='jiwa'>Spesialist Jiwa dan Psikiater</option>
										<option value='tht'>Spesialist THT</option>
										<option value='gigi'>Spesialist Gigi</option>
										<option value='gigi_anak'>Spesialist Gigi Anak</option>
										<option value='kk'>Spesialist Kulit dan Kelamin</option>
										</select> -->
                            
                <div class="form-group">
								<label>Nomor Telpon</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<input name="no_telpon" type="text" class="form-control" placeholder=""/>
									</div>
									
								<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="radio-group">
										<div class="radio-group-addon">
											<i class=""></i>
										</div>
										<div class="radio-inline">
  									<label class="radio"><input type="radio" name="jenis_kel" value="L">Laki-Laki</label>
										</div>
										<div class="radio-inline">
  									<label class="radio"><input type="radio" name="jenis_kel" value="P">Perempuan</label>
										</div>
									</div>
                  </div>
                            
                  <label>Jenis Dokter</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<select name="spesialist" class="form-control">
										<option value='umum'>Dokter Umum</option>
										<option value='anak'>Spesialist Anak</option>
										</select>
									</div>
							
									
								<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditUser" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.content-wrapper -->


		<footer class="main-footer">
    		<div class="pull-right hidden-xs"></div>
    		<strong><center><?php include "../include/footer.php";?></center></strong>
		</footer>

	</div><!-- ./wrapper -->


	

	
		<!-- Javascript Edit--> 
		<script type="text/javascript">
		$(document).ready(function () {
		
		// Users
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id_user");
				$.ajax({
					url: "users_modal_edit.php",
					type: "GET",
					data : {id_user: m,},
					success: function (ajaxData){
					$("#ModalEditUser").html(ajaxData);
					$("#ModalEditUser").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "training_modal_edit.php",
					type: "GET",
					data : {no_tri: m,},
					success: function (ajaxData){
					$("#ModalEditTraining").html(ajaxData);
					$("#ModalEditTraining").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Ruangan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "grup_modal_edit.php",
					type: "GET",
					data : {id_gr: m,},
					success: function (ajaxData){
					$("#ModalEditGrup").html(ajaxData);
					$("#ModalEditGrup").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Matakuliah
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "matakuliah_modal_edit.php",
					type: "GET",
					data : {Kode_Matakuliah: m,},
					success: function (ajaxData){
					$("#ModalEditMatakuliah").html(ajaxData);
					$("#ModalEditMatakuliah").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jadwal
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jadwal_modal_edit.php",
					type: "GET",
					data : {Id_Jadwal: m,},
					success: function (ajaxData){
					$("#ModalEditJadwal").html(ajaxData);
					$("#ModalEditJadwal").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
