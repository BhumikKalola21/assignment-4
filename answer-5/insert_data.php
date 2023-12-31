<?php

include 'db.php';

// Sample data to be inserted
$data = [
    ['John Doe', 'john@example.com'],
    ['Jane Smith', 'jane@example.com'],
    ['Alice Johnson', 'alice@example.com'],
    ['Bob Williams', 'bob@example.com'],
];

// Insert data into the 'users' table
foreach ($data as $row) {
    $name = $conn->real_escape_string($row[0]);
    $email = $conn->real_escape_string($row[1]);

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error inserting data: " . $conn->error);
    }
}

echo "Data inserted successfully!";

$conn->close();

?>
