<?php
include('config.php');

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data when it is submitted
if (isset($_POST["name"], $_POST["province"], $_POST["number"], $_POST["email"], $_POST["comment"])) {
    $name = $_POST["name"];
    $province = $_POST["province"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Proceed with submit
    $insertSql = "INSERT INTO contact (name, province, phone_number, email, comment)
              VALUES ('$name', '$province', '$number', '$email', '$comment')";

    if ($conn->query($insertSql) === true) {
        // Redirect to the success page
        header("Location: contact-success.php");
        exit();
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>