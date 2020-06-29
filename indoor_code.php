<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname  =   $email = $phone = $enroll = $college = $gender  = $games = '';

$fname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$enroll = $_POST['enroll'];
$college = $_POST['col'];
$gender = $_POST['gender'];
$games = $_POST['game'];

	$sql = "INSERT INTO indoor (Name,Email,Phone,Enrollment,College,Gender,Games) VALUES ('$fname','$email','$phone','$enroll','$college','$gender','$games')";
	$result = mysqli_query($conn, $sql);
	if($sql == true)
	{
		header("Location: indoor_thanks.html ");
	}




?>