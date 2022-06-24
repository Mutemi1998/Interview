<?php 
require('db_conn.php');

$sql = "SELECT id, firstname, lastname, email,age ,qualification, reg_date FROM Candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . 
    $row["lastname"]. " - Email: ". $row["email"]." - Age: ".$row["age"]. " - Qualifications: ".$row["qualification"]." - Registration Date: ". $row["reg_date"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>