<?php
	include"koneksi.php";
	
	$col = 6;
	$tampil="select * from user where status=1 order by nis";
	$hasil=mysqli_query($tampil);
		echo '<table><tr>';
		$cnt = 0;
	while($data=mysqli_fetch_array($hasil)){
		if($cnt >= $col) {
				echo "</tr><tr>";
				$cnt = 0;
			}
			$cnt++;
		echo"
					<td style='padding:10px 15px; text-align:center;' valign='top'>
					<a href=foto.php?nis=$data[nis]>
						<img src='admin/image/$data[name]' width=100px height=170px><br>
					</a>
					</td>";
	}
	echo '</tr></table>';
?>