<?php
session_start();
//if (!isset($_SESSION['username'])) {
//    header("location:http://login/main_login.php");
//}

//$usrname = "admin";

$_SESSION['unam'] = $usrname;

$servername = "81.4.125.82";
$username = "admin_ptaa";
$password = "ptaa789";
$dbname = "admin_ptaa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                    if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
  $sql = "SELECT * FROM members where username = '$usrname'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  //$isAdmin = $row['isAdmin'];

if($row['isAdmin']=1){
    header("location: ../../home.php");
}else {
    header("location: ../../timeline.php");

}
    ?>

