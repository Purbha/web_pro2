<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Input Data Pelanggan</title>
<link href="tampilan.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript">
	function cek_input()
	{
		var isi = document.getElementById('kdpel').value;
		if (isi == '')
		{
			alert('Kode pelanngan tidak boleh kosong.');
			document.getElementById('kdpel').focus();
			return false;
		}
		var isi = document.getElementById('pel_nama').value;
		if (isi == '')
		{
			alert('Nama tidak boleh kosong.');
			document.getElementById('pel_nama').focus();
			return false;
		}
		var isi = document.getElementById('pel_alamat').value;
		if (isi == '')
		{
			alert('Alamat tidak boleh kosong.');
			document.getElementById('pel_alamat').focus();
			return false;
		}
		var isi = document.getElementById('pel_telp').value;
		if (isi == '')
		{
			alert('Telp tidak boleh kosong.');
			document.getElementById('pel_telp').focus();
			return false;
		}
	}
</script>

<body>
<h1>Form Input Data Pelanggan</h1>
<form action="view_pelanggan.php" method="post" onsubmit="return cek_input()">
<table>
	<tr>
    	<td>Kode Pelanggan</td>
        <td><input type="text" name="kdpel" maxlength="5" size="5" id="kdpel" /></td>
    </tr>
    <tr>
    	<td>Nama</td>
        <td><input type="text" name="pel_nama" maxlength="50" size="25" id="pel_nama" /></td>
    </tr>
	<tr>
    	<td>Jenis Kelamin</td>
        <td>
        	<input type="radio" value="0" name="pel_jk" checked="checked" />Wanita
        	<input type="radio" value="1" name="pel_jk" />Pria
    	</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="pel_alamat" rows="4" cols="50" id="pel_alamat"></textarea></td>
    </tr>
    <tr>
        <td>Telp</td>
        <td><input type="text" name="pel_telp" maxlength="20" size="15" id="pel_telp" /></td>
    </tr>
	<tr>
    	<td>Status Perkawinan</td>
        <td>
        	<select name="pel_kawin">
    			<option value="0">Belum Menikah</option>
    			<option value="1">Menikah</option>
    			<option value="2">Janda / Duda</option>
            </select>
        </td>
    </tr>
	<tr>
    	<td colspan="2" align="center"><input type="submit" value="Simpan" /></td>
    </tr>
</table>
</form>
</body>
</html>