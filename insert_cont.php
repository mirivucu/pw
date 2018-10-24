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

// $_POST = json_decode(file_get_contents('php://input'), TRUE);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET variables from POST body
$username = $_POST['Username'];
$parola = $_POST['Parola'];
$email = $_POST['Email'];
$telefon = $_POST['Telefon'];
$user_type = "normal";


if (
    isset($username)
) {
    $sql = "INSERT INTO cont(`Username`,`user_type`, `Parola`, `Email`, `Telefon`, `Data`) VALUES ('$username','$user_type','$parola','$email',$telefon, now())";

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