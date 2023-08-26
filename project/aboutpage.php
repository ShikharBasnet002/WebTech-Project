<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="aboutpage.css">
    <title>About Page</title>
</head>

<body>
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="homepage.php">Home</a>
                </li>
                <li>
                    <a href="contactpage.php">Contact</a>
                </li>
                <li>
                    <a href="#" class="active">About</a>
                </li>
            </ul>
            <a href="logout.php">
                <button type="button">Log out</button>
            </a>
        </nav>
    </header>
    <div class="image">
        <img src="about.jpg" alt="Error loading image!">
    </div>
    <div class="para">
        <p>Amid the intricate tapestry of existence, I find myself, a sentient being navigating the boundless realm of
            thoughts, emotions, and experiences. Within the labyrinth of my consciousness, layers of identity
            and purpose intertwine, creating a dynamic mosaic that shapes my journey through life.</p><br>
        <p>At the core of my being lies a collection of values and beliefs, a compass that guides my decisions
            and interactions. These principles have been forged through a symphony of encounters, both pleasant
            and challenging, each contributing to the intricate sculpture of who I am. Thank You!</p>
    </div>
    <div class="foot">
        <footer>
            <div class="content">
                <p>&copy; 2023 All rights reserved</p>
            </div>
        </footer>
</body>

</html>