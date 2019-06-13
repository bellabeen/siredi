<thead>
					<tr>
                        <th>Nomor RekamMedis</th>
						<th>Tanggal</th>
                        <th>Diagnosa</th>
                        <th>Obat</th>
					</tr>
				</thead>
				<tbody>
                    <?php
						// $no=0; //variable no
						$kodeRm = $data['maxKode'];
						$noRm = (int) substr($kodeRm, 3, 3);
						$queryrm = mysqli_query ($connect, "SELECT no_rm, tanggal, diagnosa, obat FROM rm");
						if($queryrm == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($rm = mysqli_fetch_array ($queryrm)){
                            $no++;
							
							echo "
                                <tr>
									<td>$rm[no_rm]</td>
                                    <td>$rm[tanggal]</td>
                                    <td>$rm[diagnosa]</td>
                                    <td>$rm[obat]</td>
								</tr>";
						}
					?>
				</tbody>
<!-- 
				?php
 
include "koneksi.php";
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(kode_barang) as maxKode FROM tbl_barang";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$kodeBarang = $data['maxKode'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodeBarang, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "BRG";
$kodeBarang = $char . sprintf("%03s", $noUrut);
echo $kodeBarang;
?> -->