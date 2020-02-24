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
	Edit Pelanggan &nbsp;
	(<a href="index.php?page=master_pelanggan">View Pelanggan</a>)
</h2>
<table>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr><td>Kode</td><td><?php echo $kdpel ?></td></tr>
    <tr>
    	<td>Nama Pelanggan</td>
        <td><input type="text" name="pel_nama" maxlength="25" size="20" value="<?php echo $pel_nama ?>"></td>
    </tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>
        	<?php
        		if ($pel_jk == 1 ) { $value_pria = 'checked="checked"'; } else { $value_pria = ''; } 
        		if ($pel_jk == 0 ) { $value_wanita = 'checked="checked"'; } else { $value_wanita = ''; }
				echo '<input type="radio" value="1"'.$value_pria.' name="pel_jk"/>Pria&nbsp;';
				echo '<input type="radio" value="0"'.$value_wanita.' name="pel_jk"/>Wanita';
			?>
	    </td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td><textarea name="pel_alamat" rows="4" cols="50"><?php echo $pel_alamat; ?></textarea></td></tr>
    <tr>
    	<td>Telp</td>
        <td><input type="text" name="pel_telp" maxlength="25" size="20" value="<?php echo $pel_telp ?>"></td>
    </tr>
    <tr>
    	<td>Status Pernikahan</td>
        <td>
        	<?php
				if ($pel_kawin == 0) { $value0 = 'checked="checked"'; } else { $value0 = ''; }
				if ($pel_kawin == 1) { $value1 = 'checked="checked"'; } else { $value1 = ''; }
				if ($pel_kawin == 2) { $value2 = 'checked="checked"'; } else { $value2 = ''; }
	     		echo '<input type="radio" value="0"'.$value0.' name="pel_kawin" />Belum Menikah&nbsp;';
    	       	echo '<input type="radio" value="1"'.$value1.' name="pel_kawin" />Sudah Menikah&nbsp;';
        	   	echo '<input type="radio" value="2"'.$value2.' name="pel_kawin" />Janda / Duda';
			?>
        </td>
   	</tr>
    <tr>
    	<td colspan="2" class="table_footer">
        	<input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
        	<input type="hidden" value="edit_pelanggan" name="operator" />
            <input type="submit" value="Update">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
