<?php
include 'db_connect.php';

// Prepare an insert statement
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

// Bind parameters (s = string, i = integer, d = double, b = blob)
// We have 3 strings: firstname, lastname, email
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully!";

$stmt->close();
$conn->close();
?>