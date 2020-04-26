<?php

	function delete_sementara()
	{
		$konek = con();
		$sql = "DELETE FROM sementara";	
		$result = mysqli_query($konek,$sql);
		if (!$result) { echo mysqli_error($konek); }
	}

	function ambil_idtrans($tgl)
	{
		$konek = con();
		$sql = "SELECT idtrans FROM transaksi WHERE idtrans like '%$tgl%' ORDER BY idtrans DESC LIMIT 1";
		$query = mysqli_query($konek,$sql);
		if (!$query) { echo mysqli_error($konek); } else { return $query; } 
	}
	
?>