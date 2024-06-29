<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Meal</title>
    <link rel="stylesheet" href="/Oddo_proj/css/regis.css">
</head>
<body>
    <div class="container">
        <div class="create-container">
            <h2>Registration</h2>
            <form action="regis.php" method="POST">
                <input type="text" name="fname" placeholder=" First Name" >
                <input type="text" name="lname" placeholder=" Last Name" >
                <input type="email" name="email" placeholder=" Email" >
                <input type="text" name="uname" placeholder=" Username" >
                <input type="password" name="pass" placeholder=" Password" >
                <button onclick="document.location='login.php'">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

 