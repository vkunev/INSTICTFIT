<?php
session_start();
$name = $_POST["name"];
$description = $name = $_POST["description"];   
//$name="ime";
//$description="description";
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




