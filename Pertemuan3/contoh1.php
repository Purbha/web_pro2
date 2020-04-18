<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 1</title>
</head>
<script type="text/javascript">
function CekForm()
{
	/*
		getElementById memiliki property lebih banyak contohnya value
		dibandingkan dengan getElementByName 
	*/
	if(document.getElementById('kdbrg').value == '')
	{
		alert('Kode barang tidak boleh kosong');
		document.getElementById('kdbrg').focus();
		return false;
	}
	else if(document.getElementById('brg_nama').value == '')
	{
		alert('Nama tidak boleh kosong');
		document.getElementById('brg_nama').focus();
		return false;
	}
	else if(document.getElementById('brg_harga').value == '')
	{
		alert('Harga tidak boleh kosong');
		document.getElementById('brg_harga').focus();
		return false;
	}
	else if(document.getElementById('brg_stok').value == '')
	{
		alert('Stok tidak boleh kosong');
		document.getElementById('brg_stok').focus();
		return false;
	}
	else
	{
		alert('Input Berhasil');
		return true;		
	}
}
</script>
<body>
<form action="contoh1.php" method="post" onsubmit="return CekForm()">
<table>
	<tr>
		<th colspan="2">Form Input Data Barang</th>
	</tr>
    <tr>
    	<td>Kode Barang</td>
        <td><input type="text" name="kdbrg" id="kdbrg" maxlength="25" size="15" /></td>
    </tr>
    <tr>
    	<td>Nama</td>
        <td><input type="text" name="brg_nama" id="brg_nama" maxlength="50" size="25" /></td>
    </tr>
    <tr>
    	<td>Harga</td>
        <td><input type="text" name="brg_harga" id="brg_harga" maxlength="15" size="10" /></td>
    </tr>
    <tr>
    	<td>Stok</td>
        <td><input type="text" name="brg_stok" id="brg_stok"  maxlength="5" size="2" /></td>
    </tr>
    <tr>
    	<td>Kategori</td>
        <td>
        	<select name="brg_kategori">
            	<option value="HARD DISK">Hard Disk</option>
            	<option value="USB FLASH DISK">Usb Flash Disk</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Garansi</td>
        <td>
        	<input type="radio" value="1" />Bergaransi
        	<input type="radio" value="" />Tidak Bergaransi
        </td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" value="Simpan" /></td>
    </tr>
</table>
</form>
</body>
</html>