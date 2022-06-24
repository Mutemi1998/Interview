<?php

require('db_conn.php');


$sql = "INSERT INTO Interview ( question, candidate, report, marks)
VALUES (1,1,'You are good',8)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>