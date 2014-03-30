<?php
// Create connection
$con=mysqli_connect("fdb6.awardspace.net", "1652346_db1", "hackduke14", "1652346_db1");

// Insert into db
$sql="INSERT INTO Persons (Name, Phone)
VALUES
('$_POST[name]','$_POST[phone]')";

if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
        
mysqli_close($con);
?>