<script type="text/javascript">
	function cekform()
	{
		if (document.getElementById('kdbrg').value == '')
		{
			alert('Kode barang tidak boleh kosong');
			document.getElementById('kdbrg').focus();
			return false;
		}
		else if (document.getElementById('brg_nama').value == '')
		{
			alert('Nama barang tidak boleh kosong');
			document.getElementById('brg_nama').focus();
			return false;
		}
		else if (document.getElementById('brg_stok').value == '')
		{
			alert('Stok tidak boleh kosong');
			document.getElementById('brg_stok').focus();
			return false;
		}
		else if (document.getElementById('brg_harga').value == '')
		{
			alert('Harga tidak boleh kosong');
			document.getElementById('brg_harga').focus();
			return false;
		}
		else
		{
			return true;			
		}
	}
</script>
<h2>
	Add Barang &nbsp;
	(<a href="index.php?page=master_barang">View Barang</a>)
</h2>
<table>
    <form action="index.php?page=master_barang" method="post" onsubmit="return cekform()">
    <tr><td>Kode</td><td><input type="text" name="kdbrg" id="kdbrg" maxlength="10" size="10"></td></tr>
    <tr><td>Nama Barang</td><td><input type="text" name="brg_nama" id="brg_nama" maxlength="25" size="20"></td></tr>
    <tr><td>Stok</td><td><input type="text" name="brg_stok" id="brg_stok" maxlength="5" size="3"></td></tr>
    <tr><td>Harga</td><td><input type="text" name="brg_harga" id="brg_harga" maxlength="10" size="8"></td></tr>
    <tr>
    	<td>Kategori</td>
        <td>
        	<select name="brg_kategori" size="1">
            	<option value="HARD DISK" selected="selected">HARD DISK</option>
            	<option value="USB FLASH DISK">UAB FLASH DISK</option>
            	<option value="MEMORY">MEMORY</option>
            	<option value="CASING">CASING</option>
            	<option value="EAR PHONE">EAR PHONE</option>
            </select>
        </td>
   	</tr>
    <tr>
    	<td>Garansi</td>
        <td>
			<input type="radio" value="1" name="brg_garansi" checked="checked" />Bergaransi &nbsp;
			<input type="radio" value="0" name="brg_garansi" />Tidak Bergaransi
        </td>
   	</tr>
    <tr>
    	<td colspan="2" class="table_footer">
        	<input type="hidden" value="add_barang" name="operator" />
            <input type="submit" value="Tambah">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
