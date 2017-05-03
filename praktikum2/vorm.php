<?php
	$servername = "localhost";
	$username = "test";
	$password = "t3st3r123";
	$dbname = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	} 

	header("Conetent-Type: text/plain; charset=utf-8");

	var_dump($_POST);

	$sql = "INSERT INTO sjugai_Kasutajad (kasutaja_nimi, parool)
	VALUES('" . $_POST["username"] . "', '" . $_POST["password1"]  . "');";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	//echo $sql;

	// SQL injection on siin

?>
