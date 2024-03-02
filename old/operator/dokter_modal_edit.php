<?php

include "../include/connect.php";

if (isset($_GET["no_reg"])) {
    $no_reg = $_GET["no_reg"];
}

$querydokter = mysqli_query($connect, "SELECT * FROM dokter WHERE no_reg");
if($querydokter == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($dokter = mysqli_fetch_array($querydokter)){

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
	<!-- Modal Popup Dokter Edit -->
		<div id="ModalEditDokter" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup dOKTER -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Dokter</h4>
					</div>
					<div class="modal-body">
						<form action="dokter_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Nomor Registrasi Dokter</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<input name="no_reg" type="text" class="form-control" value="<?php echo $dokter["no_reg"]; ?>" disabled />
									
							</div>
							<div class="form-group">
								<label>Nama Lengkap</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $dokter["nama"]; ?>"/>
									
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $dokter["alamat"]; ?>"/>
									
							</div>

							<div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										</div>
										<input name="no_telpon" type="text" class="form-control" value="<?php echo $dokter["no_telpon"]; ?>"/>
									
							</div>


							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="radio-group">
										<div class="radio-group-addon">
											<i class=""></i>
										</div>
										<div class="radio-inline">
  									<label class="radio"><input type="radio" name="jenis_kel" value="<?php echo $dokter["jenis_kel"]; ?>">Laki-Laki</label>
										</div>
										<div class="radio-inline">
  									<label class="radio"><input type="radio" name="jenis_kel" value="<?php echo $dokter["jenis_kel"]; ?>">Perempuan</label>
										</div>
									</div>
                 			 </div>

							<label>Jenis Dokter</label>
									<div class="input-group">
											<i class=""></i>
										</div>
										<select name="spesialist" class="form-control">
										<option value='<?php echo $dokter["spesialist"]; ?>'>Dokter Umum</option>
										<option value='<?php echo $pasien["spesialist"]; ?>'>Spesialist Anak</option>
										</select>
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