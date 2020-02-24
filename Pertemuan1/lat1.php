<!DOCTYPE html>
<html>
<head>
	<title>Contoh 1</title>
	<style type="text/css">
	#paragraf {
		background-color:#0C0;	
	}
    h1 {
		background-color:#906;
        color: #F00;
    }
    th {
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 16px;
        color: #FFF;
        background-color: #006;
        padding-top: 10px;
        padding-right: 50px;
        padding-bottom: 10px;
        padding-left: 50px;
    }
    .beda {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-style: italic;
		background-color: #9FF;
	}
    td {
		background-color: #FF9;
	}
    </style>
    </head>
<body>
	<h1>Koneksi Ke Mysql</h1>
	<table>
    	<tr>
        	<th>Parameter</th><th>Description</th>
        </tr>
        <tr>
        	<td>host</td><td>Optional. Either a host name or an IP address</td>
        </tr>
        <tr>
        	<td>username</td><td class="beda">Optional. The MySQL user name</td>
        </tr>
        <tr>
        	<td>password</td><td>Optional. The password to log in with	</td>
       </tr>
       <tr>
        	<td>dbname</td><td>Optional. The default database to be used when performing queries</td>
    	</tr>
    </table>
    <p id="paragraf">
	    Sintax untuk melakukan koneksi ke database adalah <i>mysqli_connect(host,username,password,dbname);</i>
    </p>
    <p>
	<?php
		// Create connection
		mysqli_connect("127.0.0.1","dbjual","dbjual","dbjual");
		
		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Koneksi Gagal<br>".mysqli_connect_error();
		}
		else
		{
			echo "Koneksi Berhasil";    
		}
	?>  
</p>
</body>
</html>
