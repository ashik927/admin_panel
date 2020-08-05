<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "idslbdco_better_business"; 
$dbPassword = "O~r?)])2]RFo"; 
$dbName     = "idslbdco_better_business"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}