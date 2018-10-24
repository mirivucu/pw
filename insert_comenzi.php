<?php

class MyResponse{
    public $message = "";
    public $status = "";
}
$myObj = new MyResponse();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poli";

//$_POST = json_decode(file_get_contents('php://input'), TRUE);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET variables from POST body
$username = $_POST['Username'];
$suma = $_POST['Suma'];
$nume = $_POST['Nume'];
$email = $_POST['Email'];
$adresa = $_POST['Adresa'];
$oras = $_POST['Oras'];
$judet = $_POST['Judet'];
$cod = $_POST['Cod'];

if (
    isset($username) && isset($suma)
) {
    $sql = "INSERT INTO comenzi(`Username`,`Suma`, `Nume`, `Email`, `Adresa`, `Oras`, `Judet`, `Cod`, `Data`) VALUES ('$username',$suma,'$nume','$email','$adresa','$oras','$judet',$cod,now())";

    if ($conn->query($sql) === TRUE) {
        $myObj->status = "ok";
        $myObj->message = "New record created successfully";
    } else {
        $myObj->status = "nok";
        $myObj->message = "Error: " . $sql . " : " . $conn->error;
    }
}
$conn->close();

echo json_encode($myObj);
?>