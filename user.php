<!DOCTYPE html>
<html>
<head>
	<title>USER'S FORM</title>
</head>
<center><body>
<form method="post" action="user1.php">
<label>USER ID</label>	
<br>
<input type="Email" name="user_id" autocomplete="off">
<br>
<br>
<label>ROLE</label>	
<br>
<select name="role">
<option></option>
<option>Student</option>
<option>Admin</option>

</select><br><br>
<label>PASSWORD</label><br>
<input type="password" name="password" autocomplete="off">
<br><br>

<input type="submit" name="register" value="Register">
<input type="Reset" name="reset" value="Reset">
</form><br><br>

If you already have an account <a href="login.php" style="text-decoration: none;color: blue;">LOGIN</a>
</body>
</center>
</html>