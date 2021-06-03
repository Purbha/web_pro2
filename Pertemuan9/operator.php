<?php
if (isset($_POST['operator'])) {
	//Barang
	if ($_POST['operator'] == "add_barang") { input_barang(); }
	if ($_POST['operator'] == "edit_barang") { edit_barang(); }
	if ($_POST['operator'] == "delete_barang") { delete_barang(); }
	//Pelanggan
	if ($_POST['operator'] == "add_pelanggan") { input_pelanggan(); }
	if ($_POST['operator'] == "edit_pelanggan") { edit_pelanggan(); }
	if ($_POST['operator'] == "delete_pelanggan") { delete_pelanggan(); }
}
?>