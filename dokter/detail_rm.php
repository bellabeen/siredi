<thead>
					<tr>
						<th>Nomor</th>
						<th>Username</th>
						<th>Level</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;
						$queryuser = mysqli_query ($connect, "SELECT id_user, username, password, level 
						FROM user");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$user[username]</td>
									<td>$user[level]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_user='$user[id_user]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"users_delete.php?id_user=$user[id_user]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>