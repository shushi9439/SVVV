<?php

$conn = mysqli_connect('localhost', 'root', '', 'it');

if(!$conn){
 die('Connection Failed: ' . mysqli_connect_error());
}
#echo "Database 'colleges' Connected Successfully.<br>";
