<?php
$con = mysqli_connect("localhost","root","user","uturn");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$batch = $_POST['PAYMENT_BATCH_NUM'];
$payee = $_POST['PAYEE_ACCOUNT'];




?>


<?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "uturn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$batch = $_POST['PAYMENT_BATCH_NUM'];
$payee = $_POST['PAYEE_ACCOUNT'];

$sql = "INSERT INTO `global_settings` (title, value)
VALUES ('$batch', '$payee')";

if ($conn->query($sql) === TRUE) {
    echo "Record Created successfully";
} else {
    echo "Error creating record: " . $conn->error;
}

$sql2 = "UPDATE global_settings SET title='$batch' WHERE id=28";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
