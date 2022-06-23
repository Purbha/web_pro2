<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoh 1B</title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost","dbjual","dbjual","dbjual");
	if (isset($_POST['kdbrg']))	{
		$kdbrg = $_POST['kdbrg'];
		$sql = "DELETE FROM barang WHERE kdbrg='$kdbrg'";
		$result = mysqli_query($con,$sql);				
		if (!$result) {
			echo mysqli_error($con);
		} else {
			echo '<h2>Data Berhasil Dihapus</h2>';
		}
	} else {
		echo '<h2>Variable Tidak Terdeteksi</h2>';		
	}
?>
</body>
</html>