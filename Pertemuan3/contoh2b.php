<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoh 2b</title>
</head>

<body>
<?php
	//Ambil Data
	$kdbrg = $_POST['kdbrg'];
	$brg_nama = $_POST['brg_nama'];
	$brg_harga = $_POST['brg_harga'];
	$brg_stok = $_POST['brg_stok'];
	$brg_kategori = $_POST['brg_kategori'];
	$brg_garansi = $_POST['brg_garansi'];
	$brg_create = date('Y-m-d H:i:s');
	$brg_update = date('Y-m-d H:i:s');
	
	//Buka Koneksi
	$con = mysqli_connect("localhost","dbjual","dbjual","dbjual");
	
	//Syntax Insert
	$sql = "INSERT INTO barang (kdbrg, brg_nama, brg_harga, brg_stok, ". 
		"brg_kategori, brg_garansi, brg_create, brg_update) ". 
		"VALUES ('$kdbrg','$brg_nama','$brg_harga','$brg_stok','$brg_kategori',". 
		"'$brg_garansi','$brg_create','$brg_update')";	
	
	//Eksekusi
	$masukan = mysqli_query($con,$sql);
	
	//Cek apakah insert mengalami error
	if (!$masukan) {
			echo mysqli_error($con);
			echo '<h2>Input Data GAGAL</h2>';
	} else {
		?>
<h2>Input Data Berhasil</h2>
Berikut adalah data-data yang anda masukan:<br />
Kode Barang: <?php echo $kdbrg; ?><br />
Nama: <?php echo $brg_nama; ?><br />
Harga: <?php echo $brg_harga; ?><br />
Stok: <?php echo $brg_stok; ?><br />
Kategori: <?php echo $brg_kategori; ?><br />
Garansi: <?php echo $brg_garansi; ?><br />
        <?php } ?>
</body>
</html>