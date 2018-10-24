<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET variables from POST body
$name = $_GET['name'];

$sql = "INSERT INTO produse(`ID`, `nume`, `suma`) VALUES ('$name','test','test','test',now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: http://localhost/index.php");
?>