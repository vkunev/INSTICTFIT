<!DOCTYPE html>
<html>
  <head>
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <meta charset="UTF-8">
    <title>Verify User</title>
  </head>
  <body>
<?php
session_start();
require 'includes/functions.php';
include 'config.php';


$servername = "81.4.125.82";
                    $username = "admin_ptaa";
                    $password = "ptaa789";
                    $dbname = "admin_ptaa";


   // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Pulls variables from url. Can pass 1 (verified) or 0 (unverified/blocked) into url

  $ID = $_GET['$uid'];


if (isset($_GET['uid']) && isset($_GET['v'])){
      $sql = "UPDATE members SET verified='1' WHERE id='$ID'";

   if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

      }


$conn->close();

?>
</body>
</html>
