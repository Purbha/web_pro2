<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>
<?php
	include("koneksi.php");
	$login_username = $_POST["username"];
	$login_password = $_POST["password"];
	$sql = "SELECT * FROM login WHERE login_username = '".$login_username.
		"' AND login_password = '".$login_password."'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) { 
		$hasil = "LOGIN SUKSES. Selamat datang ".$login_username.".";
	} else {
		$hasil = "LOGIN GAGAL. Username atau password salah. ";
	}
?>
<body>
<h1>Cek Login: <?php echo $login_username; ?></h1>
<p>
	<?php echo $hasil; ?>
</p>
<p>
	Klik <a href="index.php">disini</a> untuk logout!!
</p>
</body>
</html>