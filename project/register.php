<?php
include('config.php');

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data when it is submitted
if (isset($_POST["name"], $_POST["country"], $_POST["number"], $_POST["email"], $_POST["password"])) {
    $name = $_POST["name"];
    $country = $_POST["country"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Check user existence
    $sql = "SELECT * FROM mytable WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User already exists
        echo "User already exists!"; ?>
        <a href="form.php">
            <h1>Use another Email</h1>
        </a>
        <?php
    } else {
        // User does not exist, proceed with registration
        // User does not exist, proceed with registration
        echo "Attempting to register: $name, $country, $number, $email, $password";
        $insertSql = "INSERT INTO mytable (name, country, phone_number, email, password)
              VALUES ('$name', '$country', '$number', '$email', '$password')";

        if ($conn->query($insertSql) === true) {
            // Redirect to the success page
            header("Location: success.php");
            exit();
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>