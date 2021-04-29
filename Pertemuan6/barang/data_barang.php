<?php

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
		$sql = "INSERT INTO barang (kdbrg, brg_nama, brg_stok, brg_harga, brg_kategori,
			brg_garansi, brg_create, brg_update) 
			VALUES ('$kdbrg','$brg_nama','$brg_stok','$brg_harga', '$brg_kategori',
			'$brg_garansi','$brg_create', '$brg_update')";	
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
}

?>