<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO about (title, descrip, php, html, css, twophp, wordpress, react, script, download, icon)
	VALUES ('About Me', 'Hello, Im a Patrick, web-developer based Paris. I have rich experience web sit design & building ad customization. Also I am good at', 'php', 'html', 'css', 'php', 'wordpress', 'React', 'Javascript', 'Downlaod CV', 'fas fa-download');";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>