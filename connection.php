<?php
$servername = "localhost";
$username = "root";
$password = "44120N";
$dbname = "dbit3_aaron_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
