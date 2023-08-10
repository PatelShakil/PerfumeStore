<?php
include '/wamp/www/as2/common/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNo = $_POST["phoneNo"];
    $password = $_POST["password"];

    // Insert data into the database
    $sql = "INSERT INTO users (phoneno, password) VALUES ('$phoneNo', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>





?>