<?php
echo"
	<form action=ppendaftaran.php method=post enctype='multipart/form-data'>
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type=text name=nis></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type=text name=username></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type=password name=password></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name=status>
						<option>Status di Sekolah</option>
						<option value=0>Siswa Aktif</option>
						<option value=1>Alumni</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>foto</td>
				<td>:</td>
				<td><input type=file name=userfile></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type=submit name=signin value=Sign In><input type=reset name=reset value=Reset></td>
			</tr>
		</table>
	</form>";
?>