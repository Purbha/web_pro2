<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Data Pelanggan</title>
<?php
	function jenis_kelamin($jk)
	{
		if ($jk == 0) { return 'Wanita'; } else { return 'Pria'; }
	}
	function perkawinan($kawin)
	{
		if ($kawin == 0) { return 'Belum Menikah'; } 
		else if ($kawin == 1) { return 'Menikah'; }
		else { return 'Janda / Duda'; }
	}
	
	//Koneksi
	$konek = mysqli_connect('localhost','dbjual','dbjual','dbjual');
	if (isset($_POST['kdpel']))
	{
		$kdpel = $_POST['kdpel'];
		$pel_nama = $_POST['pel_nama'];
		$pel_jk = $_POST['pel_jk'];
		$pel_alamat = $_POST['pel_alamat'];
		$pel_telp = $_POST['pel_telp'];
		$pel_kawin = $_POST['pel_kawin'];
		$pel_create = date('Y-m-d H:i:s');
		$pel_update = date('Y-m-d H:i:s');	
		$sql = "INSERT INTO pelanggan (kdpel,pel_nama,pel_jk,pel_alamat,pel_telp,pel_kawin,pel_create,pel_update
		) VALUES ('$kdpel','$pel_nama','$pel_jk','$pel_alamat','$pel_telp','$pel_kawin','$pel_create','$pel_update')";
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysql_error(); } else { echo "Input Data Berhasil"; }
	}
?>
<link href="tampilan.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>View Data Pelanggan</h1>
<table>
	<tr>
    	<th>No</th><th>Kode</th><th>Nama Pelanggan</th><th>Jenis Kelamin</th><th>Alamat</th><th>Telp</th>
        <th>Status Perkawinan</th><th>Create On</th><th>Update On</th>
    </tr>
    <?php
		$sql = "SELECT * FROM pelanggan ORDER BY pel_nama ASC";
		$result = mysqli_query($konek,$sql);
		$no = 1;
		while($hasil = mysqli_fetch_array($result))
		{
			echo '<tr>';
				echo '<td align="center">'.$no.'</td>';
				echo '<td align="center">'.$hasil['kdpel'].'</td>';
				echo '<td class="table_nama">'.$hasil['pel_nama'].'</td>';
				echo '<td align="center">'.jenis_kelamin($hasil['pel_jk']).'</td>';
				echo '<td>'.$hasil['pel_alamat'].'</td>';
				echo '<td align="center">'.$hasil['pel_telp'].'</td>';
				echo '<td align="center">'.perkawinan($hasil['pel_kawin']).'</td>';
				echo '<td align="center">'.date('d-M-Y H:i:s',strtotime($hasil['pel_create'])).'</td>';
				echo '<td align="center">'.date('d-M-Y H:i:s',strtotime($hasil['pel_update'])).'</td>';
			echo '</tr>';
			$no++; 
		}
	?>
</table>
</body>
</html>