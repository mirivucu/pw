<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poli";

$_POST = json_decode(file_get_contents('php://input'), TRUE);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET variables from POST body
$ID = $_POST['ID'];
$ID_comanda = $_POST['ID_comanda'];
$ID_produs = $_POST['ID_produs'];

//$parola = $_GET['parola'];
//$email = $_GET['email'];
//$telefon = $_GET['telefon'];
//$data = $_GET['data'];

if (
isset($ID)
) {
    $sql = "INSERT INTO items(`ID`,`ID_comanda`, `ID_produs`) VALUES ('$ID',$ID_comanda,'$ID_produs')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("Location: http://localhost/index.php");
?>