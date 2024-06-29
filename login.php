<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Meal - Login</title>
    <link rel="stylesheet" href="/Oddo_proj/css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder=" Username" required>
                <input type="password" name="password" placeholder=" Password" required><br><br>
                <!-- <input type="submit" value="Login"> -->
                <button onclick="document.location='index.html'">Login</button>
            </form><br><br>
            <a href="regis.php">Create an account</a>
        </div>
    </div>
</body>
</html>
