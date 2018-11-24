 <?php

$user = $_GET["rut"];
$pass = $_GET["pass"];

 $response = array();
$servername = "l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "louka02h9xnsu10x";
$password = "y3vs2bnmor2ff53y";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM koayxadwsn00k6ws.usuarios WHERE usuario = '".$user."' AND pass = '".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["nombre"];
    }

    $response["success"] = true;

} else {
    $response["success"] = false;
}
$conn->close();

echo json_encode($response);

?>
