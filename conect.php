<?php
	$Name = $_POST['Name'];
    $PhoneNumber = $_POST['phone'];
	$EmailID = $_POST['email'];
    $Password = $_POST['password'];
    $Gender = $_POST['gender'];
    $DateofBirth= $_POST['Name'];
    $Hobbies = $_POST['Hobbies'];
	$EductionQualification= $_POST['edu'];
	$Address= $_POST['Add'];

	// Database connections
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into web(Name,PhoneNumber, EmailID,Password,Gender,DateofBirth,Hobbies,EductionQualification,Address) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisssdsss", $Name, $PhoneNumber,$EmailID,$Password,$Gender,$DateofBirth,$Hobbies,$EductionQualification,$Address);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>