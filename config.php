<?php

$server = "localhost";
$uname = "root";
$pwd = "";
$dbname = "cs";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $uname, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
