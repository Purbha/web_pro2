<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 1B</title>
</head>

<body>
<?php
	$con = mysqli_connect("127.0.0.1","dbjual","dbjual","dbjual");
	if (isset($_POST['kdbrg']))
	{
		$kdbrg = $_POST['kdbrg'];
		$sql = "DELETE FROM barang WHERE kdbrg='$kdbrg'";
		$result = mysqli_query($con,$sql);				
		if (!$result)
		{
			echo mysqli_error($con);
		}
		else
		{
			echo '<h2>Data Berhasil Dihapus</h2>';
		}
	}
	else
	{
		echo '<h2>Variable Tidak Terdeteksi</h2>';		
	}
?>
</body>
</html>