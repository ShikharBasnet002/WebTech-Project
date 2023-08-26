<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register/Login</title>
</head>

<body>
    <header class="head">
        <img src="logo.png" alt="Logo">
    </header>
    <div class="register">
        <form id="form" class="form" action="register.php" method="POST">
            <h2>Register</h2>
            <div class="field">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Full Name">
                <small>Error message</small>
            </div>
            <div class="field">
                <label for="country">Select Your Country:</label>
                <select id="country" name="country">
                    <option value="AUS">Australia</option>
                    <option value="CAN">Canada</option>
                    <option value="UK">United Kingdom</option>
                    <option value="USA">United States</option>
                    <option value="GER">Germany</option>
                    <option value="Nepal" selected>Nepal</option>
                </select>
            </div>
            <div class="field">
                <label for="number">Phone Number</label>
                <input type="number" name="number" id="number" placeholder="Phone Number">
                <small>Error message</small>
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter email">
                <small>Error message</small>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <small>Error message</small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- Login Form -->
    <div class="login">
        <form id="login" class="form" action="login.php" method="POST">
            <h2>Login</h2>
            <div class="field">
                <label for="useremail">Email</label>
                <input type="text" name="email" id="useremail" placeholder="Email or Username">
                <small>Error message</small>
            </div>
            <div class="field">
                <label for="userpass">Password</label>
                <input type="password" name="password" id="userpass" placeholder="Enter Password">
                <small>Error message</small>
            </div>
            <button type="submit">Log in</button>
        </form>
    </div>
    <footer>
        <div class="content">
            <p>&copy; 2023 All rights reserved</p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>