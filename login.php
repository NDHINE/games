
<?php
session_start();
define("alert", "Wrong Password/Username Combination, Try Again!", true);


if (isset($_POST['login']))
{
$db=mysqli_connect("localhost", "root", "", "games");
$username = $_POST['username'];
$password =$_POST['password'];
$password=sha1($password);

$sql = "SELECT * FROM user WHERE User_ID = '$username' AND Password='$password' AND Role ='Student'" ;
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);
if(mysqli_num_rows($result) ==1 )
  {
$_SESSION['message']="you are loged in";
$_SESSION['username']=$username;
header("location:game.php? alert=looged in");//redirects to home page.
define("name", "Welcome" .$username. true);
echo name;

   }

else
$sql1 = "SELECT * FROM user WHERE User_ID = '$username' AND Password='$password' AND Role ='Admin'" ;
$result1 = mysqli_query($db, $sql1);
$num = mysqli_num_rows($result1);
if(mysqli_num_rows($result1) ==1 )
  {
$_SESSION['message']="you are loged in";
$_SESSION['username']=$username;
header("location:team.php? alert=looged in");//redirects to home page.
define("name", "Welcome".$username. true);
echo name;
   }

  
else{
  echo alert;
 
}
}
?>



<div style="text-align:left;
background-color: dark; padding: 1em; background-color: ; border-spacing: 5px solid black; border-radius: 20px;">
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="30">
<style type="text/css">
 fieldset{
 	color: white
    size: cover;
  background-color:white;
  background-position: center;
  background-size: 50px;
  border-radius: 2px;
  opacity: .8;
  width: 40%;
  height: 90%;
  border-color: blue;
}
h1:hover{color: blue;}
input:focus{color: blue;}

</style>
	<title>Account Login</title>
	<script type="text/javascript">
  //function myfun()
  {
    var username = document . getElementById("username").value;
    var password = document . getElementById("password").value;
    
    if((username=="")&&(password==""))
    {
      document . getElementById("messages").innerHTML="*** Please Fill All Details";
      return false;
    }
    

    if(password.length <6)
    {

      document . getElementById("messages").innerHTML="** password length must be grater than six characters";
      return false;
    }
    if(a!=b)
    {

      document . getElementById("messages").innerHTML="** password must be the same";
      return false; 
    }
    if(c!=c)
    {
      document . getElementById("messages").innerHTML="**success";
      return false
    }
    if((username==username)&&(password==password))
    {

      document . getElementById("messages").innerHTML="*** login success";
      return false;
    }
  }



</script>
</head>
<body oncontextmenu="return false" style="background-color:lightgrey;"><?php
//require_once 'function.php';?>
	<!--<u><h1 align="center" style="font-family:verdana;text-align:center;color:blue;">KIBU CMAS</h1></u>
<div class="row">
<div class="col- md-6">-->

<center><fieldset >
<legend align="center"><h2 style="color:blue; " >GAMES ADMISSSION SYSTEM</h2></legend>

<b><h1>Welcome</h1></b>


<form action="login.php" method="post" onsubmit="return myfun()">
	<center><div>
	<label>USERNAME:</label><br>
   <input type="text" name="username"   style="width: 60%;" placeholder="" id="username" required="">
		<span id="messages" style="color: green;"> </span>
 
	</div><br />

	<div>
			<label>PASSWORD:</label><br>  <input type="password" name="password"  style="width: 60%;" placeholder="" id="password" required="">
<span id="messages" style="color: red;"> </span>
 
	</div><br>

<br>
	<center><input type="submit" name="login" value="Login" style="border-radius: 0.9px;background-color: green;color: white"> 
	<button type="Reset" name="reset" style="border-radius: 0.9px;background-color: grey;color: white" ">Reset</button></center><br><br>

	<table class="table">
    <thead>
      <tr>
        
        <th > <div align="left"> <a href="user.php" style="text-decoration: none;color: blue">Create An Account</a></div></th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <td></td>
      
        </tr>
        </thead></table>
    </div>
    </center>
	</form>
	</fieldset></center>

	<center><p> &copy Complaint And Suggestion Application System.All rights Reserved.
	   <?php echo date ('D') ?> <?php echo date ('d') ?> <?php echo date ('M') ?> <?php echo date('Y') ?> </p></center>	</footer>
	</body>
</html>
