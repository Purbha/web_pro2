<?php

	function garansi($kode)
	{
		if ($kode == 1) { return "Bergaransi"; } else { return "Tidak Bergaransi"; } 
	}
	
	function tanggal($tgl)
	{
		return date('d-M-Y H:i:s',strtotime($tgl));
	}

	function jk($kode)
	{
		if ($kode == 1) { return 'Pria'; } else { return 'Wanita'; } 
	}

	function kawin($kode)
	{
		if ($kode == 0) { return 'Belum Menikah'; }
		else if ($kode == 1) { return 'Sudah Menikah'; }
		else { return 'Janda / Duda'; } 
	}

?>