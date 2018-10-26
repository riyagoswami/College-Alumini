<?php
	include"koneksi.php";
	
	$nis=$_POST['nis'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$status=$_POST['status'];
	$tgl=date('Y-m-d');
	$uploaddir='admin/image/';
	$fileName=$_FILES['userfile']['name'];
	$tmpName=$_FILES['userfile']['tmp_name'];
	$fileSize=$_FILES['userfile']['size'];
	$fileType=$_FILES['userfile']['type'];
	
	if(empty($tmpName)){
		$tampil="select * from arsip";
		$sql=mysqli_query($tampil);
		while($t=mysqli_fetch_array($sql)){
			if($t['nis']==$nis){
				$tambah="insert into user (nis,username,password,status,level,tgl_daftar,name,type) values 
						('$nis','$username','$password','$status','1','$tgl','kosong.jpg','image/jpeg')";
				$hasil=mysqli_query($tambah);
				
				if($hasil){
					echo"
						<script language=javascript type=text/javascript>
						alert('Berhasil');location='index.php';
						</script>";
				}else{
					echo"
						<script language=javascript type=text/javascript>
						alert('Mohon di isi dahulu');location='index.php';
						</script>";
				}
			}else{
				echo"location:'pendaftaran.php'";
			}
		}
	}else{
		$tampil="select * from arsip";
		$sql=mysqli_query($tampil);
		while($t=mysqli_fetch_array($sql)){
			if($t['nis']==$nis){
				$tambah="insert into user (nis,username,password,status,level,tgl_daftar,name,type,size) values 
						('$nis','$username','$password','$status','1','$tgl','$fileName','$fileType','$fileSize')";
				mysqli_query($tambah);
				$uploadfile=$uploaddir.$fileName;
				
				if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
					echo"
						<script language=javascript type=text/javascript>
						alert('Berhasil');location='index.php';
						</script>";
				}else{
					echo"
						<script language=javascript type=text/javascript>
						alert('Mohon di isi dahulu');location='index.php';
						</script>";
				}
			}else{
				echo"location:'pendaftaran.php'";
			}
		}
	}
?>