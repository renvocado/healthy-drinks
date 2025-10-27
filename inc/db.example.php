<?php
$DB_HOST = "localhost";
$DB_NAME = "healthy_drinks";
$DB_USER = "root";
$DB_PASS = ""; // ganti sendiri di lokal

try {
  $pdo = new PDO(
    "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
    $DB_USER, $DB_PASS,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (PDOException $e) {
  die("DB error: " . $e->getMessage());
}
