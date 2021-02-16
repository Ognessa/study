<?php
$hostname_studyDB="localhost";
$username_studyDB="root";
$password_studyDB="mysql";
$database_studyDB="study";

$mysqli = new mysqli($hostname_studyDB, $username_studyDB, $password_studyDB, $database_studyDB);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>