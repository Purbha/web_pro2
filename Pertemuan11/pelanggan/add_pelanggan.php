<script type="text/javascript">
	function cekform()
	{
		if (document.getElementById('kdpel').value == '')
		{
			alert('Kode pelanggan tidak boleh kosong');
			document.getElementById('kdpel').focus();
			return false;
		}
		else if (document.getElementById('pel_nama').value == '')
		{
			alert('Nama pelanggan tidak boleh kosong');
			document.getElementById('pel_nama').focus();
			return false;
		}
		else if (document.getElementById('pel_alamat').value == '')
		{
			alert('Alamat pelanggan tidak boleh kosong');
			document.getElementById('pel_alamat').focus();
			return false;
		}
		else if (document.getElementById('pel_telp').value == '')
		{
			alert('Alamat pelanggan tidak boleh kosong');
			document.getElementById('pel_alamat').focus();
			return false;
		}
		else
		{
			return true;			
		}
	}
</script>

<h2>
	Add Pelanggan &nbsp;
	(<a href="index.php?page=master_pelanggan">View Pelanggan</a>)
</h2>
<table>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr><td>Kode</td><td><input type="text" name="kdpel" maxlength="10" size="10"></td></tr>
    <tr><td>Nama Pelanggan</td><td><input type="text" name="pel_nama" maxlength="25" size="20"></td></tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>
        	<input type="radio" value="1" checked="checked"/>Pria&nbsp;
           	<input type="radio" value="0" />Wanita
	    </td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td><textarea name="pel_alamat" rows="4" cols="50"></textarea></td></tr>
    <tr><td>Telp</td><td><input type="text" name="pel_telp" maxlength="25" size="20"></td></tr>
    <tr>
    	<td>Status Pernikahan</td>
        <td>
        	<input type="radio" value="0" checked="checked" />Belum Menikah&nbsp;
           	<input type="radio" value="1" />Sudah Menikah&nbsp;
           	<input type="radio" value="2" />Janda / Duda
        </td>
   	</tr>
    <tr>
    	<td colspan="2" class="table_footer">
        	<input type="hidden" value="add_pelanggan" name="operator" />
            <input type="submit" value="Tambah">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
