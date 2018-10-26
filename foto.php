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
		<div id=gambar style="margin-top:282px;padding:10px;">
			<?php
				include"koneksi.php";
				
				$nis=$_GET['nis'];
				$tampil="select * from user_detail where nis='$nis'";
				$hasil=mysqli_query($tampil);
				$data=mysqli_fetch_array($hasil);
				$foto="select * from user where nis='$nis'";
				$hfoto=mysqli_query($foto);
				$dfoto=mysqli_fetch_array($hfoto);
				
				if($nis==$data['nis']){
					echo"
						<table border=0 style='border-collapse:collapse;font-size:90%;'>
							<tr>
								<td rowspan=7><img src='admin/image/$dfoto[name]' width=120px height=200px style='padding-right:10px'></td>
								<td collspan=1>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td>$data[nama]</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td>$data[alamat], $data[kota], $data[provinsi]</td>
									</tr>
									<tr>
										<td>Kode Pos</td>
										<td>:</td>
										<td>$data[kode_pos]</td>
									</tr>
									<tr>
										<td>Telepon</td>
										<td>:</td>
										<td>$data[telp]</td>
									</tr>
									<tr>
										<td>E-mail</td>
										<td>:</td>
										<td>$data[email]</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td><a href=index.php><input type=submit value=kembali></a></td>
									</tr>
								</td>
							</tr>
						</table>
					";
				}else{
					echo"
						<p>Pemilik akun ini belum mengisi Data Diri.<a href=index.php><input type=submit name=kembali value=kembali></a></p>
					";
				}
			?>
		</div>
		<div id=gambar style="margin-top:5px">
		Data Usaha
		</div>
	<div>
</body>
</html>