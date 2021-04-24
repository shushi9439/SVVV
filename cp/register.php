<?php
include 'dbconn-dd.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$hsc = $_POST['hsc'];
$jee = $_POST['jee'];

/*
echo "Name: " . $fname . "  " . $lname . "<br>";
echo "Username: " . $username . "<br>";
echo "Password: " . $password . "<br>";
echo "Sex: " . $sex . "<br>";
echo "HSC: " . $hsc . "<br>";
echo "JEE: " . $jee . "<br>";
echo "Stream Selected: " . $stream . "<br>";
*/
$sql = "INSERT INTO users (fname, lname, username, password, sex, hsc, jee)
VALUES ('$fname', '$lname', '$username', '$password', '$sex', '$hsc', '$jee')";
$result = mysqli_query($conn , $sql);

header("Location: login.html");
?>
