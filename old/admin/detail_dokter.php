<thead>
					<tr>
                        <th>Nomor</th>
						<th>Nomor Registrasi</th>
                        <th>Alamat</th>
                        <th>Spesialist</th>
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
								</tr>";
						}
					?>
				</tbody>