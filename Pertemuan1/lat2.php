<!DOCTYPE html>
<html>
<head>
<title>Contoh 2</title>
	<style type="text/css">
		input[type="submit"]
		{
			color: #FFFFFF;
			background-color: #FF0000;
			padding: 5px;
			font-weight:bold;
		}
		input[type="text"]
		{
			padding: 5px;
			font-family: "Courier New", Courier, monospace;
			font-size: 11px;
		}
    </style>
</head>

<body>
	<form method="post" action="lat2.php">
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th colspan="2">Test Koneksi Ke Mysql</th></tr>
    	<tr>
        	<td>Host</td><td><input type="text" name="host" maxlength="50" size="25" /></td>
        </tr>	
    	<tr>
        	<td>Username</td><td><input type="text" name="user" maxlength="50" size="25" /></td>
        </tr>	
    	<tr>
        	<td>Password</td><td><input type="text" name="pass" maxlength="50" size="25" /></td>
        </tr>	
    	<tr>
        	<td>Database</td><td><input type="text" name="db" maxlength="50" size="25"  /></td>
        </tr>	
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Test Connection"/></td>
        </tr>	  
    </table>
    </form>
    <?php
		if (isset($_POST['host']))
		{
			// Create connection
			mysqli_connect($_POST['host'],$_POST['user'],$_POST['pass'],$_POST['db']);
			
			// Check connection
			if (mysqli_connect_errno())
  			{
  				echo "Koneksi Gagal<br>".mysqli_connect_error();
			}
			else
			{
				echo "Koneksi Berhasil";    
			}
		}
	?>
</body>
</html>
