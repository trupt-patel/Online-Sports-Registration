<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$college = $fname  = $fen = $sname  = $sen = $tname  = $ten = $foname  = $foen = $finame  = $fien = $siname  = $sien = $sename  = $seen = $einame  = $eien = $niname  = $nien =  '';



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
$sename = $_POST['seventhname'];
$seen = $_POST['seventhen'];
$einame = $_POST['eightname'];
$eien = $_POST['eighten'];
$niname = $_POST['ninename'];
$nien = $_POST['nineen'];
//$password = MD5($pwd);

$sql = 
"INSERT INTO tug (college,fname,fen,sname,se,tname,ten,foname,foen,finame,fien,siname,sien,sename,seen,einame,eien,nname,nen) VALUES ('$college','$fname','$fen','$sname','$sen','$tname','$ten','$foname','$foen','$finame','$fien','$siname','$sien','$sename','$seen','$einame','$eien','$niname','$nien')";
$result = mysqli_query($conn, $sql);
if($sql == true)
{
header("Location: tug_thanks.html ");	
}
else
{
header("Location: tug_error.html");
	
}
?>