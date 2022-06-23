<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Data Barang</title>
    <style>
    td, th {
        border: 1px solid #999;
        padding: 10px;
        margin: 0px;
    }
    table {
        border-collapse:collapse;
    }
    
    th {
        font-family: "Comic Sans MS", cursive;
        background-color: #CCC;
        margin: 0px;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
    }
    </style>
</head>
<?php
	$con = mysqli_connect("localhost","dbjual","dbjual","dbjual");
	$query = mysqli_query($con,"SELECT * FROM barang");
?>
<body>
<table>
	<tr>
	    <th>Kode Barang</th>
        <th>Nama</th>
        <th>Harga</th><th>Stok</th>
        <th>Kategori</th><th>Garansi</th>
        <th>Create</th><th>Update</th>
	</tr>
    <?php
		while($row = mysqli_fetch_array($query))
		{
			echo '<tr>';
			echo '<td>'.$row['kdbrg'].'</td>';
			echo '<td>'.$row['brg_nama'].'</td>';
			echo '<td>'.$row['brg_harga'].'</td>';
			echo '<td>'.$row['brg_stok'].'</td>';
			echo '<td>'.$row['brg_kategori'].'</td>';
			echo '<td>'.$row['brg_garansi'].'</td>';
			echo '<td>'.$row['brg_create'].'</td>';
			echo '<td>'.$row['brg_update'].'</td>';
			echo '</tr>';
		}
	?>
</table>
</body>
</html>