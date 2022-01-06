<?php
  $host = 'localhost';
  $dbname = 'php_tutorial';
  $username = 'root';
  $password = '';

  try {
    $pdo_connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
  } catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
  }
?>