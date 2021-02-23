<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border: 2px solid;
			padding:30px;
			margin:10px;
			text-align: center;
			}
			input{
				padding-right: 20px;
				margin-top:20px;
				text-align: center;
			}
			form{
				align:center;
				margin:0 auto;
				width:340px;
			}
	</style>
</head>
<body>
	<form method="post" action="<?php echo base_url()?>main/regiss">
	<table>
		<th>
			<td><h1>Registration</h1></td>
		</th>
	<tr>
		<td>Firstname:</td>
		<td><input type="name" name="firstname"></td>
	</tr>
	<tr>
		<td>Lastname:</td>
		<td><input type="name" name="lastname"></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="name" name="username"></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	
	<tr>
		<td>Mobile:</td>
		<td><input type="text" name="mobile"></td>
	</tr>
	<tr>
		<td>Email id:</td>
		<td><input type="email" name="email"></td>
	</tr>
	
	<tr>
		<td><input type="submit" name="Register" value="Register"></td>
	</tr>
</table>
</form>
</body>
</html>