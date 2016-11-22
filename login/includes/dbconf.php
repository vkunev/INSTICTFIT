<?php
//DATABASE CONNECTION VARIABLES
$host = "81.4.125.82"; // Host name
$username = "admin_ptaa"; // Mysql username
$password = "ptaa789"; // Mysql password
$db_name = "admin_ptaa"; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
