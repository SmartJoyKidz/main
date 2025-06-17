<?php
require 'db_config.php';
$result = $conn->query("SELECT * FROM contact_form");
echo "<h2>Contact Submissions</h2>";
while($row = $result->fetch_assoc()) {
  echo "<p><strong>{$row['name']}</strong> ({$row['email']}) said: <br>{$row['message']}<hr></p>";
}
?>
