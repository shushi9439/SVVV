<?php
include 'dbconn-dd.php';
$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$sql = "SELECT * FROM admins WHERE admin_username='$username' AND admin_password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
die('Invalid Username or Password!<br><br>');
#echo "Invalid Username or Password!<br>";
}

else{
  echo"LOGGED IN WITH ADMIN PRIVILEGES!<br><br>";
}
?>

<html>
<body align= "center">
  <br><br><br><br><br><br><br><br>
  Add College Details<br>
  Choose a Stream:<br><br>
<a href="addcomps.html">Computers<br><br></a>
<a href="addit.html">Information Technology<br><br></a>
<a href="addextc.html">Electronics and Telecommunication<br><br></a>
<a href="addmech.html">Mechanical<br><br></a>
</body>

</html>
