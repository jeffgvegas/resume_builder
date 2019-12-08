<?php
$first = $_POST["first"];
$last = $_POST["last"];
$dob = $_POST["dob"];
$url = $_POST["url"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$prevemploy1 = $_POST["prevemploy1"];
$prevemploy2 = $_POST["prevemploy2"];
$prevemploy3 = $_POST["prevemploy3"];
$prevemploy4 = $_POST["prevemploy4"];
$skills = $_POST["skills"];
?>

<html>
  <head>
  
  </head>
  <body>
    <h1><?php echo $first." ".$last ?></h1>
    <h2>Birthdate</h2>
    <h3><?php echo $dob ?><h3>
    <h2>Github URL<h2>
    <h3><?php echo $url ?><h3>
    <h2>Email Address</h2>
    <h3><?php echo $email ?><h3>
    <h2>Contact Number</h2>
    <h3><?php echo $phone ?><h3>
    <h2>Employment History</h2>
    <h3><?php echo $prevemploy1; ?> <br/><br/>
        <?php echo $prevemploy2; ?> <br/><br/>
        <?php echo $prevemploy3; ?> <br/><br/>
        <?php echo $prevemploy4; ?> </h3>
    <h2>Additional Skills and/or Achievements</h2>
    <h3><?php echo $skills ?></h3>
  </body>
</html>
