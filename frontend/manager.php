<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .section {
            height: 50px;
            width: 200px;
            margin-bottom: 20px;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .section:hover {
            background-color: #ddd;
        }

        h2 {
            margin: 0;
        }

        .sign-out-btn {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sign-out-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style = 'color : blue'>
            <?php
                echo "Welcome: ".$_SESSION['username']."!";
            ?>
        </h1>
        <div class="section" onclick="redirectToPage('manage_clothing.php')">
            <h2>CLOTHING</h2>
        </div>
        <div class="section" onclick="redirectToPage('manage_footwear.php')">
            <h2>FOOTWEAR</h2>
        </div>
        <div class="section" onclick="redirectToPage('manage_electronics.php')">
            <h2>ELECTRONICS</h2>
        </div>
        <div class="section" onclick="redirectToPage('manage_orders.php')">
            <h2>ORDERS</h2>
        </div>
        <button class="sign-out-btn" onclick="redirectToPage('../index.php')">Sign Out</button>
    </div>

    <script>
        function redirectToPage(pageUrl) {
            window.location.href = pageUrl;
        }
    </script>
</body>
</html>
