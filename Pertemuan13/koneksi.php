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
?>