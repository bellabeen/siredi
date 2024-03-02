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
		<div id="ModalDetailDokter" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup dOKTER -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Detail Dokter</h4>
					</div>
					<div class="modal-body">
						<form action="dokter_detail.php" name="modal_popup" enctype="multipart/form-data" method="POST">
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
										<input name="nama" type="text" class="form-control" value="<?php echo $dokter["nama"]; ?>" disabled/>
									
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $dokter["alamat"]; ?>" disabled/>
									
							</div>

							<div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										</div>
										<input name="no_telpon" type="text" class="form-control" value="<?php echo $dokter["no_telpon"]; ?>" disabled/>
									
							</div>

									
									<div class="modal-footer">
								<!-- <button class="btn btn-success" type="submit">
									Save Changes
								</button> -->
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