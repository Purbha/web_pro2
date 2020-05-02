<?php

	function cek_harga($kode)
	{
		$konek = con();
		$query = mysqli_query($konek,"SELECT brg_harga FROM barang WHERE kdbrg='$kode'");
		$row = mysqli_fetch_array($query);
		return $row['brg_harga'];
	}
	
	function ambil_barang($kode=NULL)
	{
		$konek = con();
		if ($kode != NULL) { $cari="WHERE kdbrg = '$kode'"; } else { $cari=""; }
		$query = mysqli_query($konek,"SELECT * FROM barang $cari ORDER BY kdbrg ASC");
		if (!$query) { echo mysqli_error($konek); } else { return $query; } 
	}
	
	function input_barang()
	{
		$konek = con();
		$kdbrg = $_POST['kdbrg'];
		$brg_nama = $_POST['brg_nama'];
		$brg_stok = $_POST['brg_stok'];
		$brg_harga = $_POST['brg_harga'];
		$brg_kategori = $_POST['brg_kategori'];
		$brg_garansi = $_POST['brg_garansi'];
		$brg_create = date('Y-m-d H:i:s');
		$brg_update = date('Y-m-d H:i:s');
		$sql = "INSERT INTO barang (kdbrg, brg_nama, brg_stok, brg_harga, brg_kategori, brg_garansi, brg_create, brg_update) 
		VALUES ('$kdbrg','$brg_nama','$brg_stok','$brg_harga', '$brg_kategori','$brg_garansi','$brg_create', '$brg_update')";	
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Data Berhasil Di Input");';
			echo '</script>';	
		}
	}

	function edit_barang()
	{
		$konek = con();
		$kdbrg = $_POST['kdbrg'];
		$brg_nama = $_POST['brg_nama'];
		$brg_stok = $_POST['brg_stok'];
		$brg_harga = $_POST['brg_harga'];
		$brg_kategori = $_POST['brg_kategori'];
		$brg_garansi = $_POST['brg_garansi'];
		$brg_create = date('Y-m-d H:i:s');
		$brg_update = date('Y-m-d H:i:s');
		$sql = "UPDATE barang SET brg_nama = '$brg_nama', brg_stok = '$brg_stok', brg_harga = '$brg_harga', 
			brg_kategori = '$brg_kategori', brg_garansi = '$brg_garansi' WHERE kdbrg = '$kdbrg'";
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Data Berhasil Di Update");';
			echo '</script>';	
		}
	}
	
	function delete_barang()
	{
		$konek = con();
		$kdbrg = $_POST['kdbrg'];
		$sql = "DELETE FROM barang WHERE kdbrg = '$kdbrg'";
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