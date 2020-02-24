<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
<style type="text/css">
body {
	background-color: #CCC;
}
td {
	border: 1px solid #999;
	margin: 0px;
	padding: 5px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
}
th {
	color: #CCC;
	background-color: #600;
	margin: 0px;
	padding-top: 10px;
	padding-right: 5px;
	padding-bottom: 10px;
	padding-left: 5px;
	border: 1px solid #999;
}
</style>
</head>
<body>
<form action="home.php" method="post">
<table>
	<tr>
    	<th colspan="2">Form Login</th>
	<tr>
    	<td>Username</td>
        <td><input type="text" id="username" name="username" value="" /></td>
    </tr>
	<tr>
    	<td>Password</td>
        <td><input type="password" id="password" name="password" value="" /></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Submit" /></td>
    </tr>
</table>
</form>
</body>
</html>