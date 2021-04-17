<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname="games";

	

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
       
		$user_id=$_POST['user_id'];
		$role=$_POST['role'];
		$password=$_POST['password'];

		$password=sha1($password);
		
               
		$sql="INSERT INTO user(User_ID,Role,Password)
	    VALUES( '$user_id', '$role', '$password')";

if ($conn->query($sql) === TRUE) {

	header('location: login.php');
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>