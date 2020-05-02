<script type="text/javascript">
	function cekform()
	{
		if (document.getElementById('pel_nama').value == '')
		{
			 alert('Nama pelanggan tidak boleh kosong');
			 document.getElementById('pel_nama').focus();
			 return false;
		}
		else
		{ return true; }
	}
</script>
<h2>View Transaksi</h2>
<form action="index.php?page=master_transaksi" method="post" onsubmit="return cekform()">
<table>
	<tr>
    	<td>Nama Pelanggan</td>
        <td><input type="text" id="pel_nama" name="pel_nama" /></td>
        <td><input type="submit" value="Cari" /></td>
	</tr>
</table>
</form>
<table>
	<tr><th>No</th><th>ID Transaksi</th><th>Nama Pelanggan</th><th>Tanggal</th><th>Telp</th><th>Tools</th></tr>
	<?php
		$no=1;
		if (isset($_POST['pel_nama'])) { $transaksi = ambil_transaksi($_POST['pel_nama'],'pel_nama'); }
		else { $transaksi = ambil_transaksi(); }
		while($row = mysqli_fetch_array($transaksi))
		{
			echo '<tr>';
			echo '<td align="center">'.$no.'</td>';
			echo '<td align="center">'.$row['idtrans'].'</td>';
			echo '<td>'.$row['pel_nama'].'</td>';
			echo '<td align="center">'.date('d-M-Y',strtotime($row['trans_tgl'])).'</td>';
			echo '<td align="center">'.$row['pel_telp'].'</td>';
			echo '<td align="center">';
			echo '<a href="index.php?page=detail_transaksi&idtrans='.$row['idtrans'].'">Details</a>';
			echo '</td>';
			echo '</tr>';
			$no++;
		}
    ?>
</table>
