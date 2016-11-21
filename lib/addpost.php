<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$user=$_SESSION['username'];

                    $servername = "81.4.125.82";
                    $username = "admin_ptaa";
                    $password = "ptaa789";
                    $dbname = "admin_ptaa";
                    $post = $_POST['post-data'];


echo $post;
echo $user;
    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
var_dump($user);
var_dump($post);

          
mysqli_query($conn, "INSERT INTO feed (user, post)
VALUES ('$user', '$post')");
    
header('Location: http://ptaa.gq/timeline.php');
?>