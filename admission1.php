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
       
       
		$admn_no=$_POST['admn_no'];
		$reg_no=$_POST['reg_no'];
		$admn_fee=$_POST['admn_fee'];
		$admn_date=$_POST['admn_date'];

	
		
               
		$sql="INSERT INTO admission(Admission_Number,Reg_No,Admission_Fee,Admission_Date)
	    VALUES( '$admn_no', '$reg_no', '$admn_fee','$admn_date' )";

if ($conn->query($sql) === TRUE) {

	/*header('location: apartment.php');*/
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>