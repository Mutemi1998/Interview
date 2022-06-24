<?php

require('db_conn.php');

$sql = "INSERT INTO Question (question, points)
VALUES ('What is your professional background',2)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>