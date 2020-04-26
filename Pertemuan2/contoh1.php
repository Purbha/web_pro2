<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoh 1</title>
	<script type="text/javascript">
        function tombol_pertama()
        {
            document.getElementById('tampil').innerHTML = "Ini dicetak menggunakan JavaScript";
        }
    </script>
</head>
<body>

<h2>Pengenalan Javascript</h2>
<p>
	<input type="submit" name="tombol1" id="tombol1" value="Submit" onclick="tombol_pertama()" />
	<div id="tampil"></div>
</p>
</body>
</html>