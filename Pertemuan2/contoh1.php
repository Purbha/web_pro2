<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh 1</title>
</head>
<script type="text/javascript">
	function tombol_pertama()
	{
		document.getElementById('tampil').innerHTML = "Ini dicetak menggunakan JavaScript";
	}
</script>
<body>

<h2>Pengenalan Javascript</h2>
<p>
	<input type="submit" name="tombol1" id="tombol1" value="Submit" onclick="tombol_pertama()" />
	<div id="tampil"></div>
</p>
</body>
</html>