<?php
    session_start();

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
                $sql =







  header("Location: http://ptaa.gq/dashboard/members.php");
?>
