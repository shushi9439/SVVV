<?php
include 'dbconn-mech.php';

$mcname = $_POST['mcname'];
$hsc = $_POST['hsc'];
$jee = $_POST['jee'];

$sql = "INSERT INTO mech_colleges (mcname, hsc, jee)
VALUES ('$mcname', '$hsc', '$jee')";
$result = mysqli_query($conn , $sql);
header("Location: addmech.html");
