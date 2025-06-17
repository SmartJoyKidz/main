<?php
require 'db_config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();

echo "Thank you! <a href='index.html'>Back to Home</a>";
?>
