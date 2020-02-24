<?php
function con()
{
	$host = "localhost";
	$user = "dbjual";
	$pass = "dbjual";
	$db = "dbjual";	
	$konek = mysqli_connect($host,$user,$pass,$db);
	return $konek;
}

require('barang/data_barang.php');
require("fungsi.php");
require('operator.php');

?>