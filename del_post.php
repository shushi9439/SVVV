<?php
session_start();
$db=mysqli_connect('localhost','root','','project');

if(!isset($_SESSION['username'])){
	header("Location:Login/login.php");
}
if(!isset($_GET['pid'])){
	header("Location:afterlogin.php");
}else{
	$pid = $_GET['pid'];
	$sql = "DELETE FROM posts WHERE id=$pid";
	mysqli_query($db,$sql);
	header("Location:afterlogin.php");
}
?>