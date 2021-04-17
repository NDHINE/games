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
       
       
		$Reg_No=$_POST['Reg_No'];
		$F_Name=$_POST['F_Name'];
		$M_Name=$_POST['M_Name'];
		$L_Name=$_POST['L_Name'];
		$Phone_Number=$_POST['Phone_Number'];
		$role=$_POST['role'];
		$Game_ID=$_POST['Game_ID'];

		
               
		$sql="INSERT INTO Student(Reg_No,F_Name,M_Name,L_Name,Phone_Number, Role,Game_ID)
	    VALUES('$Reg_No','$F_Name','$M_Name','$L_Name','$Phone_Number', '$role','$Game_ID')";

if ($conn->query($sql) === TRUE) {

	/*header('location: apartment.php');*/
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>