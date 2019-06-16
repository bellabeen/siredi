<thead>
					<tr>
                        <th>Nomor</th>
						<th>NIK</th>
						<th>Nama Lengkap</th>
						<th>Aksi</th>
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
										<a href='detail_rm.php?page=detail&nik=$pasien[nik]' class='btn btn-info'>Detail</a>
									</td>
								</tr>";
						}
					?>
				</tbody>