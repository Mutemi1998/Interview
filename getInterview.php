<?php 
require('db_conn.php');

$sql = "SELECT id, question, candidate, report, marks, reg_date FROM Interview";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Question: Id " . $row["question"]. " - Candidate Id " . 
    $row["candidate"]. " - Report: ". $row["report"]." - Marks: ".$row["marks"]." - Registration Date: ". $row["reg_date"]."</br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>