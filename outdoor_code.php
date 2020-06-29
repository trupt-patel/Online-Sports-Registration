dbn<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname  =   $email = $phone = $enroll = $college = $gender  = $games = '';

$fname = $_POST['firstname'];
$fen = $_POST['email'];
$phone = $_POST['mobile'];
$enroll = $_POST['enroll'];
$college = $_POST['col'];
$gender = $_POST['gender'];
$games = $_POST['game'];

//$password = MD5($pwd);

$sql = "INSERT INTO outdoor (Name,Email,Phone,Enrollment,College,Gender,Games) VALUES ('$fname','$email','$phone','$enroll','$college','$gender','$games')";
$result = mysqli_query($conn, $sql);
if($sql == true)
{
header("Location: outdoor_thanks.php ");	
}
else
{
header("Location: outdoor_error.html");
	
}
?>