<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 3</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>Form Input Data Barang</h1>
    <span class="judul">Kode Barang</span>
    <input name="kdbrg" type="text" size="20" maxlength="25" class="isi"/><br />
    <span class="judul">Nama</span>
    <input name="brg_nama" type="text" size="50" maxlength="100" class="isi" /><br />
    <span class="judul">Harga</span>
    <input name="brg_harga" type="text" size="10" maxlength="15" class="isi" /><br />
    <span class="judul">Stok</span>
    <input type="text" name="brg_stok" size="2" maxlength="5" class="isi" /><br />
    <span class="judul">Kategori</span>
    <select name="brg_kategori" size="1">
    	<option value="FLASH DISK">Flash Disk</option>
    	<option value="HARD DISK">Hard Disk</option>
    </select><br />
    <span class="judul">Garansi</span>
    <input name="brg_garansi" type="radio" value="1" />Bergaransi
    <input name="brg_garansi" type="radio" value="0" />Tidak Bergaransi<br />
    <input type="submit" value="Simpan" /><br />
    <p id="paragraf">
    	The id selector is used to specify a style for a single, unique element.<br />
		The id selector uses the id attribute of the HTML element, and is defined with a "#".
    </p>
    <p class="judul">
        The class selector is used to specify a style for a group of elements.<br />
        The class selector is most often used on several elements.<br />
        This allows you to set a particular style for many HTML elements with the same class.<br />
        The class selector uses the HTML class attribute, and is defined with a "."<br />
    </p>
</body>
</html>