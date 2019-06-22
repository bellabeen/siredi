<thead>
					<tr>
                        <th>Nomor</th>
						<th>Nomor Registrasi</th>
                        <th>Nama</th>
                        <th>Spesialist</th>
						<th>Aksi</th>
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
									<td>$dokter[no_reg]</td>
									<td>$dokter[nama]</td>
									<td>$dokter[spesialist]</td>
									<td>
										<a href='#' class='open_modal_edit btn btn-primary' no_reg='$dokter[no_reg]'>Edit</a>
										<a href='#' class='open_modal_detail btn btn-info' no_reg='$dokter[no_reg]'>Detail</a>
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"dokter_delete.php?no_reg=$dokter[no_reg]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>