<script type="text/javascript">
	function konfirmasi()
	{
		var tanya = confirm('Yakin ingin menghapus data?');
		if (tanya == true) { return true; } else { return false; } 
	}
</script>

<?php
	$data = ambil_pelanggan($_GET['kdpel']);
	while($row = mysqli_fetch_array($data))
	{
		$kdpel = $row['kdpel'];
		$pel_nama = $row['pel_nama'];
		$pel_jk = $row['pel_jk'];
		$pel_alamat = $row['pel_alamat'];
		$pel_telp = $row['pel_telp'];
		$pel_kawin = $row['pel_kawin'];
	}
?>
<h2>
	Delete Pelanggan &nbsp;
	(<a href="index.php?page=master_pelanggan">View Pelanggan</a>)
</h2>
<table>
    <form action="index.php?page=master_pelanggan" method="post" onSubmit="return konfirmasi()">
    <tr><td class="kode">Kode</td><td><?php echo $kdpel ?></td></tr>
    <tr>
    	<td>Nama Pelanggan</td>
        <td><?php echo $pel_nama ?></td>
    </tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td><?php echo jk($pel_jk); ?></td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td><?php echo $pel_alamat ?></td>
    </tr>
    <tr>
    	<td>Telp</td>
        <td><?php echo $pel_telp ?></td>
   	</tr>
    <tr>
    	<td>Status Pernikahan</td>
        <td><?php echo kawin($pel_kawin); ?></td>
   	</tr>
    <tr>
    	<td colspan="2" class="table_footer">
        	<input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
        	<input type="hidden" value="delete_pelanggan" name="operator" />
            <input type="submit" value="Delete">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
