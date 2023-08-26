<?php
session_start();

if(!isset($_SESSION['email']))
{
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
    <link rel="stylesheet" href="homepage.css">
    <title>Home Page</title>
</head>

<body>
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="#" class="active">Home</a>
                </li>
                <li>
                    <a href="contactpage.php">Contact</a>
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
    <div class="image">
        <img src="cover.jpg" alt="Error loading image!">
    </div>
    <ul class="list">
        <li>Name: Shikhar Basnet</li>
        <li>Address: Ilam</li>
        <li>Roll: 7829014</li>
        <li>Web Technology Project</li>
        <li>BICTE 3rd sem</li>
    </ul>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
        <tr>
            <td>Shikhar</td>
            <td>21</td>
            <td>Ilam</td>
        </tr>
        <tr>
            <td>Gopi</td>
            <td>26</td>
            <td>Dolakha</td>
        </tr>
        <tr>
            <td>Pradeep</td>
            <td>25</td>
            <td>Surkhet</td>
        </tr>
    </table>
    <iframe width="1349" height="350" src="https://www.youtube.com/embed/gooWdc6kb80" frameborder="0"
        allowfullscreen></iframe>
    <div class="bicon">
        <a href="https://www.facebook.com/shikhar.basnet.52" class="icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/shikhar_058" class="icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.github.com/ShikharBasnet002" class="icon"><i class="fa-brands fa-github"></i></a>
    </div>
    <footer>
        <div class="content">
            <p>&copy; 2023 All rights reserved</p>
    </footer>
</body>

</html>