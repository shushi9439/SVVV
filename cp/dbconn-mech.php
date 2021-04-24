<?php

$conn = mysqli_connect('localhost', 'root', '', 'mech');

if(!$conn){
 die('Connection Failed: ' . mysqli_connect_error());
}
#echo "Database 'colleges' Connected Successfully.<br>";
