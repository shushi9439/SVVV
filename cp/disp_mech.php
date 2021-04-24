<?php
session_start();
include 'dbconn-mech.php';
 echo "This is mech cutoff list";
 echo "<br><br>your entered details are: ";
 echo "<br>HSC: " . $_SESSION['userhsc'];
 echo "<br>JEE: " . $_SESSION['userjee'];
 echo "<br><br> YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:<BR><BR> ";
 $sql = "SELECT * FROM mech_colleges";
 $result = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_assoc($result)){
   if($_SESSION['userhsc'] >= $row["hsc"] && $_SESSION['userjee'] >= $row["jee"] ){
   echo $row["mcname"];
   echo "<br>HSC: " . $row["hsc"] . "    JEE: " . $row["jee"] . "<br><br>";
 }
 }
 ?>
