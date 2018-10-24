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
$username = $_POST['name'];
$tip = $_POST['tip'];
//$parola = $_GET['parola'];
//$email = $_GET['email'];
//$telefon = $_GET['telefon'];
//$data = $_GET['data'];

if (
    isset($username) && isset($tip)
) {
    $sql = "INSERT INTO cont(`Username`,`user_type`, `Parola`, `Email`, `Telefon`, `Data`) VALUES ('$username','$tip','parola','email',32432, now())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("Location: http://localhost/index.php");
?>