<thead>
					<tr>
                        <th>Nomor</th>
						<th>Nama Lengkap</th>
						<th>Nomor Telpon</th>
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
									<td>$pasien[nama]</td>
									<td>$pasien[no_telpon]</td>
								</tr>";
						}
					?>
				</tbody>