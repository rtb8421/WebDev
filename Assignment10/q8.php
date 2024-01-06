<?php

$host = "your_host";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($createDatabaseQuery) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

$conn->select_db($database);


$createTableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
if ($conn->query($createTableQuery) === TRUE) {
    echo "Table 'users' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

$insertDataQuery = "INSERT INTO users (username, email) VALUES
    ('john_doe', 'john@example.com'),
    ('jane_doe', 'jane@example.com')";
if ($conn->query($insertDataQuery) === TRUE) {
    echo "Data inserted successfully\n";
} else {
    echo "Error inserting data: " . $conn->error . "\n";
}


$addColumnQuery = "ALTER TABLE users ADD COLUMN age INT(3)";
if ($conn->query($addColumnQuery) === TRUE) {
    echo "Column 'age' added successfully\n";
} else {
    echo "Error adding column: " . $conn->error . "\n";
}


$addRowQuery = "INSERT INTO users (username, email, age) VALUES
    ('sam_smith', 'sam@example.com', 25)";
if ($conn->query($addRowQuery) === TRUE) {
    echo "Row added successfully\n";
} else {
    echo "Error adding row: " . $conn->error . "\n";
}


$deleteRowQuery = "DELETE FROM users WHERE id = 1";
if ($conn->query($deleteRowQuery) === TRUE) {
    echo "Row deleted successfully\n";
} else {
    echo "Error deleting row: " . $conn->error . "\n";
}

$conn->close();

?>
