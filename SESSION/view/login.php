<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']))
{
header("location: page1.php");
}
?>

<html>
<head>
<form action ="" method ="post" enctype ="multipart/form-data">
	<title> Login Page</title>
</head>
<body>
	<form method="post" action="logincheck.php">
		

             <h3>Login Page</h3>
			
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
	
	</form>
</body>
</html>