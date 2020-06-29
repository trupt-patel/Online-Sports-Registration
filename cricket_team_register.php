<!-- Into this file, we create a layout for registration page. -->
<?php

include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body style="background-color: pink">
<nav class="navbar navbar-default">
        <div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
  <div class="container-fluid">
      <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;background-color: green" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
      <a href="welcome.php" class="w3-bar-item w3-button" >HomePage</a>
        <a href="indoor.php" class="w3-bar-item w3-button" >Indoor Games</a>
        <a href="outdoor.php" class="w3-bar-item w3-button" >Outdoor Games</a>
        <a href="team.php" class="w3-bar-item w3-button" >Team Games</a>
        <a href="Conditions.php" class="w3-bar-item w3-button">Terms And Condtions</a>
        <a href="Privacy.php" class="w3-bar-item w3-button">Privacy And Policy</a>
        <a href="FeedBack.php" class="w3-bar-item w3-button">FeedBack</a>
    </div>    
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
      <h1>Team Games </h1>
      <script>
        function w3_open() 
        {
          document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() 
        {
          document.getElementById("mySidebar").style.display = "none";
        }
      </script> 
    </div>
</nav>

<body style="background-color: pink">
<div id="frmRegistration" style="background-color: yellow;margin-top: 70px ">
<form class="form-horizontal" action="cricket_team_code.php" method="POST">
	<h1>Cricket Team Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">College:</label>
    <div class="col-sm-6">
      <input type="text" name="col" class="form-control" id="col" placeholder="Enter Your College Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">1st Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter 1st Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">1st Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="firsten" class="form-control" id="firsten" placeholder="Enter 1st Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">2nd Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="secondname" class="form-control" id="secondname" placeholder="Enter 2nd Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">2nd Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="seconden" class="form-control" id="seconden" placeholder="Enter 2nd Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">3rd Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="thirdname" class="form-control" id="thirdname" placeholder="Enter 3rd Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">3rd Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="thirden" class="form-control" id="thirden" placeholder="Enter 3rd Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">4th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="fourthname" class="form-control" id="fourthname" placeholder="Enter 4th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">4th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="fourthen" class="form-control" id="fourthen" placeholder="Enter 4th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">5th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="fifthname" class="form-control" id="fifthname" placeholder="Enter 5th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">5th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="fifthen" class="form-control" id="fifthen" placeholder="Enter 5th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">6th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="sixthname" class="form-control" id="sixthname" placeholder="Enter 6th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">6th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="sixthen" class="form-control" id="sixthen" placeholder="Enter 6th Player Enrollment No" pattern="[0-9]{12}"title="Not a proper format Enrollment"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">7th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="seventhname" class="form-control" id="seventhname" placeholder="Enter 7th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">7th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="seventhen" class="form-control" id="sevventhen" placeholder="Enter 7th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">8th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="eightname" class="form-control" id="eightname" placeholder="Enter 8th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">8th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="eighten" class="form-control" id="eighten" placeholder="Enter 8th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">9th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="ninename" class="form-control" id="ninename" placeholder="Enter 9th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">9th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="nineen" class="form-control" id="nineen" placeholder="Enter 9th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">10th Plyer Name:</label>
    <div class="col-sm-6">
      <input type="text" name="tenname" class="form-control" id="tenname" placeholder="Enter 10th Player Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">10th Plyer Enroll No:</label>
    <div class="col-sm-6">
      <input type="num" name="tenen" class="form-control" id="tenen" placeholder="Enter 10th Player Enrollment No" pattern="[0-9]{12}" title="Not a proper format Enrollment" required>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
    <br><br><br><br>
  </div>
</form>
</div>
</body>