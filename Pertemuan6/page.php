<?php
	if (isset($_GET['page']))
	{
		//Master Barang
		if ($_GET['page'] == "master_barang") {
			require('barang/view_barang.php');
		}
		else if ($_GET['page'] == "add_barang") { require('barang/add_barang.php'); }
		else { require('home.php'); }
	}
	else
	{
		require('home.php');
	}
?>