<?php
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
$name = $_POST['name'];

//$parola = $_GET['parola'];
//$email = $_GET['email'];
//$telefon = $_GET['telefon'];
//$data = $_GET['data'];
$result = [];
if (
isset($name)
) {
    if($name == "admin")
    {
        $sql = "select * from comenzi order by data DESC";

    }else {
        $sql = "select * from comenzi where username='$name' order by data DESC";
    }
    $result = $conn->query($sql);
}
$conn->close();
?>


<h2>Istoric comenzi</h2>
<table style="width:100%">
    <tr>
        <th>Cod Commanda</th>
        <th>Data</th>
        <th>Username</th>
        <th>Suma</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ID"] . "</td>" . "<td>" . $row["Data"] . "</td>" . "<td>" . $row["Username"] . "</td>" . "<td>" . $row["Suma"] . "</td></tr>";
        }
    } else {
        echo "<tr><td>Nu s-a realizat nici o ocomanda.</td></tr>";
    }
    ?>
</table>
