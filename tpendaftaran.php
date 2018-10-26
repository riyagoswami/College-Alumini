<?php
	include"koneksi.php";
	
	$tampil="select * from user order by nis";
	$hasil=mysqli_query($tampil);
	
	echo"
		<table border=1 style='border-collapse:collapse'>
			<tr>
				<td>No</td>
				<td>NIS</td>
				<td>Username</td>
				<td>Status</td>
				<td>Foto</td>
				<td>Proses</td>
			</tr>";
		$no=1;
		while($data=mysqli_fetch_array($hasil)){
		echo"
			<tr>
				<td>$no</td>
				<td>$data[nis]</td>
				<td>$data[username]</td>
				<td>$data[status]</td>
				<td><img src='admin/image/$data[name]' width=20 height=30></td>
				<td>Edit | Delete</td>
			</tr>";
			$no++;
		}
		echo"</table>";
?>