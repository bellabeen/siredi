<thead>
					<tr>
                        <th>Nomor</th>
						<th>Nomor Registrasi</th>
                        <th>Alamat</th>
                        <th>Spesialist</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$querydokter = mysqli_query ($connect, "SELECT no_reg, nama, alamat, spesialist, no_telpon, jenis_kel FROM dokter");
						if($querydokter == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($dokter = mysqli_fetch_array ($querydokter)){
                            $no++;
							
							echo "
                                <tr>
                                    <td>$no</td>
									<td>$dokter[nik]</td>
									<td>$dokter[nama]</td>
									<td>
										<a href='#' class='open_modal_edit btn btn-primary' nik='$dokter[no_reg]'>Edit</a>
										<a href='#' class='open_modal_detail btn btn-info' nik='$dokter[no_reg]'>Detail</a>
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"pasien_delete.php?nik=$pasien[nik]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>