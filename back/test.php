<?php
Header("Access-Control-Allow-Origin: *");
Header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
Header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

$host = "localhost";
$username = "root";
$password = "28098507";
$database = "blog";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Error: ('. $conn->connect_errno .') '. $conn->connect_error);
}

// Assuming you're receiving these values from a form
$firstname = "yahia"; 
$lastname = "haouanii"; 
$mail = "yahiahaouani@isimg.tn"; 
$password_hash = $_POST["password"]; // Assuming you're hashing the password
$username = $_POST["username"];

$statement = $conn->prepare("INSERT INTO users (firstname, lastname, email, password_hash, username) VALUES (?, ?, ?, ?, ?)");
$statement->bind_param('sssss', $firstname, $lastname, $mail, $password_hash, $username);

if ($statement->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $statement->error;
}

$statement->close();
$conn->close();
?>
