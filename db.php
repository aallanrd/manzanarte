

<?php
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 19/07/2015
 * Time: 11:33
 */
$servername = "localhost";
$username = "manzana";
$password = "manzana";
$dbname = "manzana";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h5 > id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<h5>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>