<?php
$name = $_POST["name"];
$email = $_POST["email"];  
$subject = $_POST["subject"];
$message = $_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messages (name, email, subject, message)
        VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

// Pass the data to the Thanks.php page
session_start();
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["subject"] = $subject;
$_SESSION["message"] = $message;

header("Location: Thanks.php");
exit();
?>
