<?php 

require('db_conn.php');

$sql = "SELECT id, question, points, reg_date FROM Question";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Question:" . $row["question"]." - Registration Date: ". $row["reg_date"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>