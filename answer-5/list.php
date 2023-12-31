<?php

include 'db.php';

// Fetch data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display data in a table
echo "<h2>User List</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
