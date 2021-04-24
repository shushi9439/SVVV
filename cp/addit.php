<?php
include 'dbconn-it.php';

$itcname = $_POST['itcname'];
$hsc = $_POST['hsc'];
$jee = $_POST['jee'];

$sql = "INSERT INTO it_colleges (itcname, hsc, jee)
VALUES ('$itcname', '$hsc', '$jee')";
$result = mysqli_query($conn , $sql);
header("Location: addit.html");
