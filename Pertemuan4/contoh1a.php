<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoh 1A</title>
    <style>
    td {
        padding: 5px;
        border: 1px solid #999;
    }
    th {
        background-color: #CCC;
        padding-top: 10px;
        padding-right: 5px;
        padding-bottom: 10px;
        padding-left: 5px;
        border: 1px solid #999;
    }
    </style>
	<script>
        function konfirmasi() {
            var tanya = confirm ("Apakah data ingin dihapus?");
            if (tanya == true) { return true; }	else { return false; } 
        }
    </script>
</head>
<body>
    <h2>Confirm Box</h2>
    A confirm box is often used if you want the user to verify or accept something.<br />
    When a confirm box pops up, the user will have to click either "OK" or "Cancel" to proceed.<br /> 
    <a href="http://www.w3schools.com/js/js_popup.asp" target="_blank">
        http://www.w3schools.com/js/js_popup.asp
    </a>
    <br /><br />
    <?php $con = mysqli_connect("localhost","dbjual","dbjual","dbjual"); ?>
    <form action="contoh1b.php" method="post" onsubmit="return konfirmasi()">
    <table>
        <tr>
            <th colspan="2">Hapus Data Barang</th>
        </tr>
        <tr>
            <td>Kode Barang</td>
            <td>
                <select name="kdbrg">
                <?php
                    $sql = "SELECT kdbrg FROM barang";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query))
                    {
                        echo '<option value="'.$row['kdbrg'].'">'.$row['kdbrg'].'</option>';
                    }
                    
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Hapus" /></td>
        </tr>
    </table>
    </form>
</body>
</html>