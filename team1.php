<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname=" games_admission_system";

	

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
       
		$Team_ID=$_POST['Team_ID'];
		$Team_Name=$_POST['Team_Name'];
		

		
               
		$sql="INSERT INTO team(Team_ID, Team_Name)
	    VALUES('$Team_ID','$Team_Name')";

if ($conn->query($sql) === TRUE) {

	/*header('location: apartment.php');*/
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>