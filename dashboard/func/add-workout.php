<?php
session_start();
<<<<<<< HEAD
$name = $_POST["name"];
$description = $name = $_POST["description"];   
//$name="ime";
//$description="description";
=======
error_reporting(E_ALL);
ini_set('display_errors', 'On');

 

//if(isset($_POST['addworkout'])){   
>>>>>>> 12969a617046bca588b19a3718978e254eef4e97
$servername = "81.4.125.82";
$username = "admin_ptaa";
$password = "ptaa789";
$dbname = "admin_ptaa";
<<<<<<< HEAD

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['addworkout'])){   
 $sql = "INSERT INTO workouts (id, name, description) VALUES ('','$name','$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('../workouts.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo mysql_errno($sql) . ": " . mysql_error($sql) . "\n";
}

}
$conn->close();
?>




=======
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
>>>>>>> 12969a617046bca588b19a3718978e254eef4e97
