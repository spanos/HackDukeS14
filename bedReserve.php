<?php

//Redirect to home page after action
header( 'Location: http://valakuzhy.dx.am/home.php' ) ;

// Create connection
$con = mysqli_connect("fdb6.awardspace.net","1652346_db1","hackduke14","1652346_db1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$BedID = $_REQUEST['BedID'];
  
// Insert into db
$sql = "UPDATE Beds 
        SET IsOpen=1
        WHERE BedId='$BedID'" ;
        
// Remove from db
$sql = "UPDATE Beds
SET IsOpen=0
WHERE BedId ='$BedID'" ;

if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 bed reserved";
echo "1 bed released";

// Close
mysqli_close($con);

?> 
