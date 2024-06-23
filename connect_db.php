<!-- Used to connect to database -->
<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'CP476';
$DATABASE_NAME = 'CP476';

$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (!$conn) {
  $_SESSION['db_status'] = "Not Connected";
  die("Connection failed: " . mysqli_connect_error());
} else {
  $_SESSION['db_status'] = "Connected";
}