<?php
include 'dbconn-comps.php';

$ccname = $_POST['ccname'];
$hsc = $_POST['hsc'];
$jee = $_POST['jee'];

$sql = "INSERT INTO comps_colleges (ccname, hsc, jee)
VALUES ('$ccname', '$hsc', '$jee')";
$result = mysqli_query($conn , $sql);
header("Location: addcomps.html");
