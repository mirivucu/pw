<?php
class MyResponse{
    public $message = "";
    public $status = "";
    public $username = "";
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
$name = $_POST['Username'];
$parola = $_POST['Parola'];
if (
isset($name)
) {
    $sql = "select * from cont where Username = '$name'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) === 1) {
        $myObj->username = $name;
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
