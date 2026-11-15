<?php
include 'db_connect.php';

// 1. Create Database (if it doesn't exist)
$sql_create_db = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database 'myDB' created or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Switch to the new database
$conn->select_db("myDB");

// 2. Create Table MyGuests
$sql_create_table = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'MyGuests' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>