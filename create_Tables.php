<?php

require('db_conn.php');

// sql to create table
$Users = 'CREATE TABLE `users` (
	`id` int(11) NOT NULL,
	`user_name` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`name` varchar(255) NOT NULL
)';

if ($conn->query($Users ) === TRUE) {
    echo "Table Users created successfully";
  } else {
    echo "Error creating table Users: " . $conn->error;
  }
	
$Candidate = "CREATE TABLE Candidate (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		age INT(2),
		qualification ENUM('Certificate','Diploma','Degree','Masters'),
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";

if ($conn->query($Candidate ) === TRUE) {
    echo "Table Candidate created successfully";
  } else {
    echo "Error creating table Candidate: " . $conn->error;
  }

$Question = "CREATE TABLE Question (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	question VARCHAR(300) NOT NULL,
	points Int(2) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

if ($conn->query($Question ) === TRUE) {
        echo "Table Question created successfully";
      } else {
        echo "Error creating Question table: " . $conn->error;
      }


$Interview = "CREATE TABLE Interview (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	question INT UNSIGNED NOT NULL,
	candidate INT UNSIGNED NOT NULL,
	report VARCHAR(500),
	marks INT(100),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (question) REFERENCES Question(id),
	FOREIGN KEY (candidate) REFERENCES Candidate(id)
	)";


	if ($conn->query($Interview ) === TRUE) {
	  echo "Table Interview created successfully";
	} else {
	  echo "Error creating Interview table: " . $conn->error;
	}


$conn->close();
?>