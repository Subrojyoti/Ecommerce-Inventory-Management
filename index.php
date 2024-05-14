
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
</head>
<body>
    <form action="backend/login.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        </br></br>
        <label for="passwd">Password</label>
        <input type="password" id = "passwd" name="passwd">
        </br></br> 
        <input type="submit" value="login">
        <a href="frontend/register.php" >Sign Up</a>
    </form>
</body>
</html>


