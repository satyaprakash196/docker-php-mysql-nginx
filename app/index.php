<?php
include 'config.php';

echo "<h1>PHP + Nginx + MySQL Docker Setup</h1>";

$sql = "SELECT NOW() as current_time";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>Database Connected Successfully!</p>";
    echo "<p>Current Time from DB: " . $row['current_time'] . "</p>";
} else {
    echo "<p>Database Connection Failed!</p>";
}
?>
