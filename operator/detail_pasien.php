<thead>
					<tr>
                        <th>Nomor</th>
						<th>NIK</th>
						<th>Nama Lengkap</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$querypasien = mysqli_query ($connect, "SELECT nik, nama, umur, tgl_lahir, alamat, no_telpon FROM pasien");
						if($querypasien == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($pasien = mysqli_fetch_array ($querypasien)){
                            $no++;
							
							echo "
                                <tr>
                                    <td>$no</td>
									<td>$pasien[nik]</td>
									<td>$pasien[nama]</td>
									<td>
										<a href='#' class='open_modal_edit btn btn-primary' nik='$pasien[nik]'>Edit</a>
										<a href='#' class='open_modal_detail btn btn-info' nik='$pasien[nik]'>Detail</a>
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"pasien_delete.php?nik=$pasien[nik]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>