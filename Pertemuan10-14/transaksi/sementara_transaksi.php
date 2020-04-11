<?php if (isset($_POST['kdbrg'])) { ?>
<form action="index.php?page=add_transaksi" method="post">
    <table>
        <tr>
            <th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Harga</th><th>jumlah Beli</th><th>Subtotal</th>
        </tr>
        <?php
            $no = 1; $total = 0;
            $sementara = ambil_sementara();
            while ($row = mysqli_fetch_array($sementara))
            {
                $subtotal = $row['detail_harga'] * $row['detail_qty'];
				$total = $total + $subtotal;
                echo '<tr>';
                echo '<td align="center">'.$no.'</td>';
                echo '<td align="center">'.$row['kdbrg'].'</td>';
                echo '<td>'.$row['brg_nama'].'</td>';
                echo '<td align="center">'.number_format($row['detail_harga'],0,",",".").'</td>';
                echo '<td align="center">'.$row['detail_qty'].'</td>';
                echo '<td align="center">'.number_format($subtotal,0,",",".").'</td>';
                echo '</tr>';
				$no++;
            }
        ?>
        <tr>
            <td class="table_footer" colspan="6">
            	<input type="hidden" value="<?php echo $idtrans ?>" name="idtrans" />
            	<input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
            	<input type="hidden" value="add_transaksi" name="operator" />
                <input type="submit" value="Simpan" />
        	</td>
        </tr>
    </table>
</form>
<?php } ?>
<script type="text/javascript">
	document.getElementById('total_bayar').innerHTML = "<?php echo number_format($total,0,",","."); ?>";
</script>