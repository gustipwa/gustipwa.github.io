<html>
<head>
<title>Ol Shop</title>
</head>

		<body background="http://getwallpapers.com/wallpaper/full/0/3/7/42257.jpg">
<?php
session_start();
$username=$_POST["user"];
$password=$_POST["pass"];
if($username=="admin" AND $password=="admin")
{
 $_SESSION["user"]=$username;
 header("location:home.htm");
}else{
 header("location:login.php?login_error");
}
?>
<center>
	<br>
		<br>
		<img src="https://1.bp.blogspot.com/-K5mN5-H165k/WVS1I_yadwI/AAAAAAAAAJU/UcTZHt2n9_gt529bXZYAT3Hz6dAhScqkgCLcBGAs/s1600/logo-last.png">
		<br>
		<h1><font color="white" >Selamat Anda Berhasil Login <?php echo $user; ?> </font></h1>
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
	<br>
<font color="yellow">Copyright By @Gusti Pranata Ari Wibowo(</font><a href="https://www.instagram.com/gustipwa/"><font color="white">Contact Me</font></a><font color="yellow"> )</font>
</center>
</html>