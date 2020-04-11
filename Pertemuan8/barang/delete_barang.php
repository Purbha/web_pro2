<script type="text/javascript">
	function konfirmasi()
	{
		var tanya = confirm('Yakin ingin menghapus data?');
		if (tanya == true) { return true; } else { return false; } 
	}
</script>

<?php
	$data = ambil_barang($_GET['kdbrg']);
	while($row = mysqli_fetch_array($data))
	{
		$kdbrg = $row['kdbrg'];
		$brg_nama = $row['brg_nama'];
		$brg_harga = $row['brg_harga'];
		$brg_stok = $row['brg_stok'];
		$brg_kategori = $row['brg_kategori'];
		$brg_garansi = $row['brg_garansi'];
	}
?>
<h2>
	Delete Barang &nbsp;
	(<a href="index.php?page=master_barang">View Barang</a>)
</h2>
<table>
    <form action="index.php?page=master_barang" method="post" onSubmit="return konfirmasi()">
    <tr><td class="kode">Kode</td><td><?php echo $kdbrg ?></td></tr>
    <tr>
    	<td>Nama Barang</td>
        <td><?php echo $brg_nama ?></td>
    </tr>
    <tr>
    	<td>Stok</td>
        <td><?php echo $brg_stok ?></td>
    </tr>
    <tr>
    	<td>Harga</td>
        <td><?php echo $brg_harga ?></td>
    </tr>
    <tr>
    	<td>Kategori</td>
        <td><?php echo $brg_kategori ?></td>
   	</tr>
    <tr>
    	<td>Garansi</td>
        <td><?php echo garansi($brg_garansi); ?></td>
   	</tr>
    <tr>
    	<td colspan="2" class="table_footer">
        	<input type="hidden" value="<?php echo $kdbrg ?>" name="kdbrg" />
        	<input type="hidden" value="delete_barang" name="operator" />
            <input type="submit" value="Delete">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
