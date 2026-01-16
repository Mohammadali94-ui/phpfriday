<?php
// connect.php
// Connects to the database using PDO

$host = "localhost";
$dbname = "lab1";      // database name
$username = "root";   // default for XAMPP
$password = "";       // default for XAMPP

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Database connected successfully.</p>";
} catch (PDOException $e) {
    echo "<p>Database connection failed: " . $e->getMessage() . "</p>";
}
