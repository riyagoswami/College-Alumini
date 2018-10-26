<?php 
include"koneksi.php"; 
$login=mysqli_query($con,"SELECT*FROM user WHERE 
username='$_POST[username]' AND 
password='$_POST[password]'"); 
$r=mysqli_fetch_array($login); 
$ketemu=mysqli_num_rows($login); 
 
if($_POST['username']=='admin' and $_POST['password']=='admin'){
	echo"
		<script language=javascript type=text/javascript>
		alert('Selamat Datang Administrator');location='admin/index.php';
		</script>"; 
}else{
	if($ketemu>0){ 
	  session_start();  
	  
	  session_register("user"); 
	  session_register("pass"); 
	   
	  
	  $_SESSION[user]=$r[username]; 
	  $_SESSION[pass]=$r[password]; s
	  echo"
		<script language=javascript type=text/javascript>
		alert('Selamat Datang Dihalaman Pengolahan');location='admin/index.php?nis=$r[nis]';
		</script>"; 
	} else{ 
		echo"
		<script language=javascript type=text/javascript>
		alert('Maaf, username dan password tidak benar!');location='index.php';
		</script>";  
	}
}	
?>