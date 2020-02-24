<?php
	include("koneksi.php");
	$login_username = $_POST["username"];
	$login_password = $_POST["password"];
	//$login_username = "admin";
	//$login_password = "admin123";
	$sql = "SELECT * FROM login WHERE login_username = '".$login_username.
		"' AND login_password = '".$login_password."'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) { 
		$hasil = "LOGIN SUKSES. Selamat datang ".$login_username.".";
	} else {
		$hasil = "LOGIN GAGAL. Username atau password salah. ";
	}
	echo $hasil;
?>
