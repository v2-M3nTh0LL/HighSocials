<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "highsocials";

/*$servername = "188.241.222.25";
$username = "highsoci";
$password = "2Mfh8s9[Y!XU5q";
$dbname = "highsoci_db";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>