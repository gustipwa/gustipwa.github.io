<html>
<head>
<title>Form Succes</title>
</head>

<body background="42257.jpg">
<?php
$nama=$_POST['nama'];
$pass=$_POST['pass'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$sex=$_POST['sex'];
$jurusan=$_POST['jurusan'];
$hoby=$_POST['hoby'];
$alamat=$_POST['alamat'];
?>
<center>
	<br>
		<br>
		<img src="logo-last.png">
		<br>
		<hr>
		</center>
		<p align="center">
<strong><font face="verdana" size="2">
. <a title="Halaman Home" href="home.htm" ><font color="white"> Home </font></a> .
<a title="Halaman Utama" href="login.htm" ><font color="white"> Beranda </font></a> .
<a title="Halaman Tutorial" href="tutorial.htm" ><font color="white"> Tutorial </font></a> .
<a title="Halaman Daftar"href="index.htm" ><font color="white"> Daftar </font></a> . 
<a title="Halaman Tools"href="tool.htm" ><font color="white"> Tools Product </font></a> .
<a title="Halaman Tentang"href="about.htm"><font color="white"> About </font></a> .   
</font></strong></p><hr/>
<center>
			<h1><font color="white">Registrasi</font><font color="red"> Succes</font>
				<br>
					</br>
<table border="3" width="350" height="350"> 
<tr>
<td><font color="white"><?php echo 'Nama ';?></font></td>
<td><font color="white">:</font></td>
<td><font color="white"><?php echo $nama;?></font></td>
</tr>
<td><font color="white"><?php echo 'Password ';?></font></td>
<td><font color="white">:</font></td>
<td><font color="white"><?php echo $pass;?></font></td>
</tr>
<td><font color="white"><?php echo 'Tanggal/Bulan/Tahun ';?></font></td>
<td><font color="white">:</font></td>
<td><font color="white"><?php echo $tgl;?>/<?php echo $bln;?>/<?php echo $thn;?></font></td>
</tr>
<td><font color="white"><?php echo 'Jenis Kelamin ';?></font></td>
<td><font color="white">:</font></td>
<td><<font color="white"><?php echo $sex;?></font></td>
</tr>
<td><font color="white"><?php echo 'Jurusan ';?></font></td>
<td><font color="white">:</font></td>
<td><<font color="white"><?php echo $jurusan;?></font></td>
</tr>
<td><font color="white"><?php echo 'Hoby ';?></font></td>
<td><font color="white">:</font></td>
<td><<font color="white"><?php echo $hoby;?></font></td>
</tr>
<td><font color="white"><?php echo 'Alamat ';?></font></td>
<td><font color="white">:</font></td>
<td><font color="white"><?php echo $alamat;?></font></td>
</table>
	<br>
<a href="login.htm"><font color="white">Silahkan Login</font></a>
</center>
</body>
</html>
