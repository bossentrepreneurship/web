<?php
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$conn = new mtsqli('localhost', 'root', '', 'test');
	if($conn->connect_error){
		die('Connection Failed  : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("Insert into registration(fullName, email, message) values(?, ?, ?");

		$stmt->bind_param("sss",$fullName, $email, $message);
		$stmt->execute();
		echo "Success!"
		$stmt->close();
		$conn->close();
?>
