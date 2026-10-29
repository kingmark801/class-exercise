<?php
$conn = new mysqli("localhost", "root", "", "my_contacts_");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name    = $_POST["name"];
$email   = $_POST["email"];
$contact = $_POST["contact"];

$stmt = $conn->prepare("INSERT INTO contact1 (name, email, contact) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $contact);
$stmt->execute();

header("Location: dashboard.php");