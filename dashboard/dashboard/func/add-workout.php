<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

 

//if(isset($_POST['addworkout'])){   
$servername = "81.4.125.82";
$username = "admin_ptaa";
$password = "ptaa789";
$dbname = "admin_ptaa";
$name = $_POST["name"];
$description = $_POST["description"];  
  // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }



mysqli_query($conn, 'INSERT INTO workouts (name, description) VALUES ("'.$name.'", "'.$description.'")');

header('Location: ../workouts.php');
//}else{
//    echo "kor";
//}

?>