<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 2</title>
<style type="text/css">
.judul {
	font-family: "Comic Sans MS", cursive;
	font-size: 14px;
	font-style: italic;
	color: #F00;
	font-weight: bold;
}
</style>
<script type="text/javascript">
	function cek_input()
	{
		var isi = document.getElementById('input1').value;
		if (isi == "")
		{
			alert('TextBox masih kosong.');
		}
		else
		{
			alert('TextBox terisi. Isinya adalah ' + isi);
		}
	}
</script>
</head>

<body>
    <h2 class="judul">Validasi Input Dengan JavaScript</h2>
    <p class="judul">
        Ini adalah latihan JavaScript Kedua
    </p>
    <input name="input1" type="text" id="input1" size="25" maxlength="25" />
    <input type="submit" value="Cek" onclick="cek_input()" />
</body>
</html>
