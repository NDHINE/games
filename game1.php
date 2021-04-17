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
       
       
		$Game_ID=$_POST['Game_ID'];
		$Game_Name=$_POST['Game_Name'];
		$Team_ID=$_POST['Team_ID'];

		
               
		$sql="INSERT INTO game(Game_ID, Game_Name, Team_ID)
	    VALUES('$Game_ID','$Game_Name','$Team_ID')";

if ($conn->query($sql) === TRUE) {

	/*header('location: apartment.php');*/
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>