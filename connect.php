<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "goodfit";

$conn = new mysqli($host, $user, $pass, $dbname, 3307);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>