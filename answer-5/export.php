<?php

include 'db.php';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="data_export.xls"');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data available</td></tr>";
}

echo "</table>";

$conn->close();

?>
