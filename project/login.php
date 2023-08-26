<?php
session_start();

@include 'config.php';

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form when it is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Entered email: " . $email . "<br>"; // Add this line
    echo "Entered password: " . $password . "<br>"; // Add this line

    // Validate the user's credentials
    $sql = "SELECT * FROM mytable WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        var_dump($user); // Add this line

        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['email'] = $email;
            header("Location: homepage.php");
            exit();
        } else {
            // Invalid password
            echo "Invalid password!";
        }
    } else {
        // Invalid login
        echo "Invalid email!";
    }
}
