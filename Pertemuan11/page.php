<?php
	if (isset($_GET['page']))
	{
		//Master Barang
		if ($_GET['page'] == "master_barang") { require('barang/view_barang.php'); }
		else if ($_GET['page'] == "add_barang") { require('barang/add_barang.php'); }
		else if ($_GET['page'] == "edit_barang") { require('barang/edit_barang.php'); }
		else if ($_GET['page'] == "delete_barang") { require('barang/delete_barang.php'); }
		//Master Pelanggan
		else if ($_GET['page'] == "master_pelanggan") { require('pelanggan/view_pelanggan.php'); }
		else if ($_GET['page'] == "add_pelanggan") { require('pelanggan/add_pelanggan.php'); }
		else if ($_GET['page'] == "edit_pelanggan") { require('pelanggan/edit_pelanggan.php'); }
		else if ($_GET['page'] == "delete_pelanggan") { require('pelanggan/delete_pelanggan.php'); }
		//Master Transaksi
		else if ($_GET['page'] == "add_transaksi") { require('transaksi/add_transaksi.php'); }
		//else if ($_GET['page'] == "master_transaksi") { require('transaksi/view_transaksi.php'); }
		//else if ($_GET['page'] == "detail_transaksi") { require('transaksi/view_transaksi_detail.php'); }
		
		//Error Link
		else { require('home.php'); }
	}
	else
	{
		require('home.php');
	}
?>