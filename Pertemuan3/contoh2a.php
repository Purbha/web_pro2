<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 2a</title>
<style type="text/css">
body {
	background-color: #CCC;
}
th ,td {
	padding: 5px;
	border: 1px solid #999;
}
table {
	background-color: #FFF;
	border-collapse:collapse;
}
</style>
</head>
<body>
<form action="contoh2b.php" method="post">
<table>
	<tr>
		<th colspan="2" align="center">Form Input Data Barang</th>
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
        	<input type="radio" value="1" name="brg_garansi" />Bergaransi
        	<input type="radio" value="0" name="brg_garansi" />Tidak Bergaransi
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Simpan" /></td>
    </tr>
</table>
</form>
</body>
</html>