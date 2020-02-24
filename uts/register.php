<?php
	include("koneksi.php");
	$login_username = $_POST["username"];
	$login_password = $_POST["password"];
	$login_name = $_POST["login_name"];
	$login_email = $_POST["login_email"];
	$sql = "INSERT INTO login (login_username, login_password, login_name, login_email, login_times, login_fail) 
		VALUES ('".$login_username."', '".$login_password."', '".$login_name."', '".$login_email."', '0', '0')";
	if ($conn->query($sql) === TRUE) {
		$hasil = "Insert Successful.";		
	} else {
		$hasil = "Error: ".$sql."<br>".$conn->error;				
	}
	echo $hasil;
?>
