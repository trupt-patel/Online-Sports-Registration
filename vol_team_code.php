<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$college = $fname  = $fen = $sname  = $sen = $tname  = $ten = $foname  = $foen = $finame  = $fien = '';



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


//$password = MD5($pwd);

$sql = 
"INSERT INTO vol (college,fname,fen,sname,se,tname,ten,foname,foen,finame,fien) VALUES ('$college','$fname','$fen','$sname','$sen','$tname','$ten','$foname','$foen','$finame','$fien')";
$result = mysqli_query($conn, $sql);
if($sql == true)
{
header("Location: vol_thanks.html ");	
}
else
{
header("Location: vol_error.html");
	
}
?>