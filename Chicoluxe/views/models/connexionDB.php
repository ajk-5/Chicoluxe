<?php
$servername = "localhost";
$username = "u505794256_trueluxury";
$password = "1vM~rVDMY";
$dbname = "u505794256_trueluxury";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>