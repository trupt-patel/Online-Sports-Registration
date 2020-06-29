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

//$password = MD5($pwd);

$sql = "INSERT INTO team (Name,Email,Phone,Enrollment,College,Gender,Games) VALUES ('$fname','$email','$phone','$enroll','$college','$gender','$games')";
$result = mysqli_query($conn, $sql);
if($games === Cricket)
{
header("Location: cricket_team_register.php");	
}
else if($games === Kabaddi)
{
header("Location: kabaddi_team_register.php");	
}
else if($games === Khokho)
{
header("Location: Kho-kho_team_register.php");	
}
else if($games === Vollyball)
{
header("Location: vol_team_register.php");	
}
else if($games === TugOfWalls)
{
header("Location: tug_team_register.php");	
}
else
{
header("Location: team_error.html");
	
}
?>