
<thead>
					<tr>
						<th>Nomor</th>
						<th>NIK</th>
                        <th>Nomor RekamMedis</th>
						<th>Tanggal</th>
                        <th>Diagnosa</th>
                        <th>Obat</th>
					</tr>
				</thead>
				<tbody>
                    <?php
						$no=0; //variable no
						// $kodeRm = $data['maxKode'];
						// $noRm = (int) substr($kodeRm, 3, 3);
						$nik = $_GET["nik"];
						// $queryrm = mysqli_query ($connect, "SELECT nik, no_rm, tanggal, diagnosa, obat FROM rm JOIN pasien ON (rm.nik = pasien.nik)
						// WHERE nik='$nik'");
						$queryrm = mysqli_query ($connect, "SELECT nik, no_rm, tanggal, diagnosa, obat FROM rm JOIN pasien USING (nik)
						WHERE nik='$nik'");
						if($queryrm == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($rm = mysqli_fetch_array ($queryrm)){
                            $no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$rm[nik]</td>
									<td>$rm[no_rm]</td>
                                    <td>$rm[tanggal]</td>
                                    <td>$rm[diagnosa]</td>
                                    <td>$rm[obat]</td>
								</tr>";
						}
					?>
				</tbody>