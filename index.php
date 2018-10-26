<html>
<head>
	<title>Alumni SMK Negeri 1 Wonosobo</title>
</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
	<div id=header>
		<div id=gambar style="height:40px">
		</div>
		<div id=md style="float:left;margin-right:0,7px;margin-top:5px;">
			<form action="login.php" method=POST>
				<p style="padding-left:3px;">Login utuk masuk ke pemprosesan data pribadi.</p>
				<table>
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
						<td></td>
						<td></td>
						<td><input type=submit value=Login name=login></td>
					</tr>
				</table>
			</form>
		</div>
		<div id=md style="float:left;margin-left:6px;margin-top:5px;">
			<p style="padding-left:3px;">Jika anda belum mendaftar menjadi Siswa SMK Negeri 1 Wonosobo atau Alumni SMK Negeri 1 Wonosobo. 
				Anda dapat mengisi form yang ada di bawah ini.</p>
			<?php include"pendaftaran.php"; ?>
		</div>
		<div id=gambar style="margin-top:282px">
			<?php include"siswa_aktif.php"; ?>
		</div>
		<div id=gambar style="margin-top:5px">
			<?php include"alumni.php"; ?>
		</div>
		<div id=gambar style="margin-top:5px">
		Data Usaha
		</div>
	<div>
</body>
</html>