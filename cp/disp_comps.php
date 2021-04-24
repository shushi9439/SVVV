<?php
session_start();
include 'dbconn-comps.php';
 echo "<h2><b><i>This is colleges cutoff list</i></b></h2>";
 echo "<br><br><h3><i><b>Your entered details are: </b></i></h3>";
 echo "<br><b>HSC: </b>" . $_SESSION['userhsc'];
 echo "<br><b>JEE: </b>" . $_SESSION['userjee'];
 echo "<br><br><h2><i> YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:</i></h2><BR><BR> ";
 $sql = "SELECT * FROM comps_colleges";
 $result = mysqli_query($conn, $sql);

   while($row = mysqli_fetch_assoc($result)){
   if($_SESSION['userhsc'] >= $row["hsc"] && $_SESSION['userjee'] >= $row["jee"] ){
   echo "<h2><i>".$row["ccname"]."</h2></i>";
   echo "<br>HSC: " . $row["hsc"] . "    JEE: " . $row["jee"] . "<br><br><hr>";
   }

}
echo "<h2><i><a href='../afterlogin.php'>Go Back To SVVV-O-PEDIA</a></i></h2>";


 ?>
