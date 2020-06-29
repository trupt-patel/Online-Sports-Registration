<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$college = $fname  = $fen = $sname  = $sen = $tname  = $ten = $foname  = $foen = $finame  = $fien = $siname  = $sien  = '';



$college = $_POST['col'];
$fname = $_POST['firstname'];
$fen = $_POST['firsten'];
$sname = $_POST['secondname'];
$sen = $_POST['seconden'];
$tname = $_POST['thirdname'];
$ten = $_POST['thirden'];
$foname = $_POST['fourthname'];
$foen = $_POST['fourthen'];
$finame = $_POST['fifthname'];
$fien = $_POST['fifthen'];
$siname = $_POST['sixthname'];
$sien = $_POST['sixthen'];



//$password = MD5($pwd);

$sql = 
"INSERT INTO kabaddi (college,fname,fen,sname,se,tname,ten,foname,foen,finame,fien,siname,sien) VALUES ('$college','$fname','$fen','$sname','$sen','$tname','$ten','$foname','$foen','$finame','$fien','$siname','$sien')";
$result = mysqli_query($conn, $sql);
if($sql == true)
{
header("Location: kabaddi_team_thanks.html ");	
}
else
{
header("Location: kabaddi_error.html");
	
}
?>