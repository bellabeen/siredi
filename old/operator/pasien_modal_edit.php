<?php

include "../include/connect.php";

$nik	= $_GET["nik"];

$querypasien = mysqli_query($connect, "SELECT * FROM pasien WHERE nik='$nik'");
if($querypasien == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($pasien = mysqli_fetch_array($querypasien)){

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
	<!-- Modal Popup Pasien Edit -->
		<div id="ModalEditPasien" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup Pasien -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Pasien</h4>
					</div>
					<div class="modal-body">
						<form action="pasien_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>NIK</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class=""></i>
										</div>
										<input name="nik" type="text" class="form-control" value="<?php echo $pasien["nik"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Lengkap</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class=""></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $pasien["nama"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Umur</label>
									<div class="input-group">
										<div class="input-group-addon">
										</div>
										<input name="umur" type="text" class="form-control" value="<?php echo $pasien["umur"]; ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
										</div>
										<input name="tgl_lahir" type="text" class="form-control" value="<?php echo $pasien["tgl_lahir"]; ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $pasien["alamat"]; ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										<div class="input-group-addon">
										<i class=""></i>

										</div>
										<input name="no_telpon" type="text" class="form-control" value="<?php echo $pasien["no_telpon"]; ?>"/>
									</div>
							</div>
									
									<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save Changes
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>