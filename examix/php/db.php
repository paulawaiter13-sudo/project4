<?php
// includes/db.php
$host = "3306";
$user = "paulawais_em";
$pass = "nqD0zJTvn8wR";
$db   = "paulawais_examix";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("DB connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
