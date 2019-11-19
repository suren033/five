<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO bottom (icon)
	VALUES ('fab fa-facebook-f');";
	$sql .= "INSERT INTO bottom (icon)
	VALUES ('fab fa-twitter');";
	$sql .= "INSERT INTO bottom (icon)
	VALUES ('fab fa-github');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
