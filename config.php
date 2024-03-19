<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, phone, password) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstName, $lastName, $email, $phone, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}

?>
