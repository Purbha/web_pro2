<?php

	function ambil_pelanggan($kode=NULL) {
		$konek = con();
		if ($kode != NULL) { $cari="WHERE kdpel='$kode'"; } else { $cari=""; }
		$query = mysqli_query($konek,"SELECT * FROM pelanggan $cari ORDER BY kdpel ASC");
		if (!$query) { echo mysqli_error($konek); } else { return $query; } 
	}
	
	function input_pelanggan()
	{
		$konek = con();
		$kdpel = $_POST['kdpel'];
		$pel_nama = $_POST['pel_nama'];
		$pel_jk = $_POST['pel_jk'];
		$pel_alamat = $_POST['pel_alamat'];
		$pel_telp = $_POST['pel_telp'];
		$pel_kawin = $_POST['pel_kawin'];
		$pel_create = date('Y-m-d H:i:s');
		$pel_update = date('Y-m-d H:i:s');
		$sql = "INSERT INTO pelanggan (kdpel, pel_nama, pel_jk, pel_alamat, pel_telp, pel_kawin, pel_create, pel_update) 
		VALUES ('$kdpel','$pel_nama','$pel_jk','$pel_alamat', '$pel_telp','$pel_kawin','$pel_create','$pel_update')";	
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Data Berhasil Di Input");';
			echo '</script>';	
		}
	}

	function edit_pelanggan()
	{
		$konek = con();
		$kdpel = $_POST['kdpel'];
		$pel_nama = $_POST['pel_nama'];
		$pel_jk = $_POST['pel_jk'];
		$pel_alamat = $_POST['pel_alamat'];
		$pel_telp = $_POST['pel_telp'];
		$pel_kawin = $_POST['pel_kawin'];
		$brg_create = date('Y-m-d H:i:s');
		$brg_update = date('Y-m-d H:i:s');
		$sql = "UPDATE pelanggan SET pel_nama = '$pel_nama', pel_jk = '$pel_jk', pel_alamat = '$pel_alamat', 
			pel_telp = '$pel_telp', pel_kawin = '$pel_kawin' WHERE kdpel = '$kdpel'";
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Data Berhasil Di Update");';
			echo '</script>';	
		}
	}
	
	function delete_pelanggan()
	{
		$konek = con();
		$kdpel = $_POST['kdpel'];
		$sql = "DELETE FROM pelanggan WHERE kdpel = '$kdpel'";
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Data Berhasil Di Delete");';
			echo '</script>';	
		}
		
	}

?>