<?php
include '/wamp/www/as2/common/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNo = $_POST["phoneNo"];
    $password = $_POST["password"];
    $position = $_POST["position"];

    // Insert data into the database

    $curUserSql = "SELECT id FROM users WHERE phoneno = '$phoneNo';";
    $sql = "INSERT INTO users(phoneno, password,type) VALUES ('$phoneNo', '$password','$position')";
    if ($conn->query($sql) === TRUE) {
        session_reset();
        $_SESSION['curUserId'] = $conn->query($curUserSql)->fetch_row()[0];
        header("Location: home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>