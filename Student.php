<!DOCTYPE html>
<html>
<head>
	<title>STUDENT'S FORM</title>
</head>
<center><body>
<form method="post" action="student1.php">
<label>REGISTRATION NUMBER</label>	
<br>
<input type="text" name="Reg_No" autocomplete="off">
<br>
<br>
<label>FIRST NAME</label>	
<br>
<input type="text" name="F_Name" autocomplete="off">
<br><br>
<label>MIDDLE NAME</label><br>
<input type="text" name="M_Name" autocomplete="off">
<br><br>
<label>SURNAME</label><br>
<input type="text" name="L_Name" autocomplete="off">
<br><br>
<label>PHONE</label><br>
<input type="phone" name="Phone_Number" autocomplete="off">
<br><br>
<label>ROLE</label><br>
<select name="role">
<option></option>
<option>Student</option>
<option>Admin</option>

</select>
<br><br>
<label>GAME ID</label><br>
<input type="text" name="Game_ID" autocomplete="off">
<br><br>
<input type="submit" name="register" value="Register">

</form>

</body>
</center>
</html>