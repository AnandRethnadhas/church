<?php
echo "hello world!";
$name=$_post["family_id"];
$family_name=$_post["family_name"];
$head_of_family=$_post["head_of_family"];
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "church";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO family (family_id, family_name, head_of_family) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $family_id, $family_name, $head_of_family);
// Set parameters and execute  
$family_id = $name;
$family_name = $family_name;
$head_of_family = $head_of_family;
if ($stmt->execute()) {
    echo "New family registered successfully";
} else {
    echo "Error: " . $stmt->error;
}
?>