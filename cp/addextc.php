<?php
include 'dbconn-extc.php';

$ecname = $_POST['ecname'];
$hsc = $_POST['hsc'];
$jee = $_POST['jee'];

$sql = "INSERT INTO extc_colleges (ecname, hsc, jee)
VALUES ('$ecname', '$hsc', '$jee')";
$result = mysqli_query($conn , $sql);
header("Location: addextc.html");
