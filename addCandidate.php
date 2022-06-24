<?php

require('db_conn.php');


$sql = "INSERT INTO Candidate (firstname, lastname, email, age, qualification)
VALUES ('John', 'Doe', 'john@example.com', 23, 'Degree')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>