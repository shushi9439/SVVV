<?php
session_start();
include 'dbconn-dd.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  die('Invalid Username or Password!<br><br>');
}

else{
  echo"Login Successful!<br><br>";

}

$stream = $row["stream"];
$userhsc = $row["hsc"];
$userjee = $row["jee"];

$_SESSION['userhsc'] = $userhsc;
$_SESSION['userjee'] = $userjee;

if($stream == "comps" ){
  header ("Location: disp_comps.php");
}
elseif($stream == "it" ){
  header ("Location: disp_it.php");
}
elseif($stream == "extc" ){
  header ("Location: disp_extc.php");
}
elseif($stream == "mech" ){
  header ("Location: disp_mech.php");
}
?>
