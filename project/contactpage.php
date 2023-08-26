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
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="contactpage.css">
    <title>Contact Page</title>
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
                    <a href="#" class="active">Contact</a>
                </li>
                <li>
                    <a href="aboutpage.php">About</a>
                </li>
            </ul>
            <a href="logout.php">
                <button type="button">Log out</button>
            </a>
        </nav>
    </header>
    <div class="contact">
        <h1>Contact us</h1>
        <form id="form" class="form" action="contact.php" method="POST">
            <div class="field">
                <Label for="name">Name:</Label>
                <input type="text" name="name" id="name" placeholder="Enter full name">
                <small>Error Message</small>
            </div>
            <div class="field">
                <label for="province">Province:</label>
                <select id="province" name="province">
                    <option value="01">Koshi Province</option>
                    <option value="02">Madhesh Province</option>
                    <option value="03" selected>Bagmati Province</option>
                    <option value="04">Gandaki Province</option>
                    <option value="05">Lumbini Province</option>
                    <option value="06">Karnali Province</option>
                    <option value="07">Sudurpaschim Province</option>
                </select>
            </div>
            <div class="field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <small>Error Meaasge</small>
            </div>
            <div class="field">
                <label for="number">Phone:</label>
                <input type="number" name="number" id="number">
                <small>Error Message</small>
            </div>
            <div class="field">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="33" rows="3"></textarea>
                <small>Error Message</small>
            </div>
            <div class="field">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="bicon">
        <a href="https://www.facebook.com/shikhar.basnet.52" class="icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/shikhar_058" class="icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.github.com/ShikharBasnet002" class="icon"><i class="fa-brands fa-github"></i></a>
    </div>
    <footer>
        <div class="content">
            <p>&copy; 2023 All rights reserved</p>
    </footer>
    <script src="contact.js"></script>
</body>

</html>