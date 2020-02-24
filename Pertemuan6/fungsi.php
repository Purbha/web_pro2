<?php

	function garansi($kode)
	{
		if ($kode == 1) { return "Bergaransi"; } else { return "Tidak Bergaransi"; } 
	}
	
	function tanggal($tgl)
	{
		return date('d-M-Y H:i:s',strtotime($tgl));
	}

?>