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
header("location:game.php");//redirects to home page.
echo "welcome";
   }

else
$sql1 = "SELECT * FROM user WHERE User_ID = '$username' AND Password='$password' AND Role ='Admin'" ;
$result1 = mysqli_query($db, $sql1);
$num = mysqli_num_rows($result1);
if(mysqli_num_rows($result1) ==1 )
  {
$_SESSION['message']="you are loged in";
$_SESSION['username']=$username;
header("location:team.php");//redirects to home page.
echo "welcome";
   }

  
else{
  echo alert;
 
}
}
?>
