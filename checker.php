<?php
$servername = "localhost";
$username = "root";
$password = "YchangThird1!";
$dbname = "cells";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mobile WHERE cellnumber='" . $_POST['cellnumber'] . "'";
$result = $conn->query($sql);

$conn->close();

if ($result->num_rows > 0) {
    return true;
} 
else {
    return false;
}

?> 