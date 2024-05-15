<!-- index.html -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">E-commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Explore <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="electronics.php">Electronics</a>
                            <a class="dropdown-item" href="clothing.php">Clothing</a>
                            <a class="dropdown-item" href="footwear.php">Footwears</a>
                        </div>
                    </li>
                    <li class = "nav-item">
                        <a class="nav-link" href="order_history.php">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class = "nav-link">
                        <form action ="../backend/utilities.php" method="post">
                            <input type="submit" value = "logout" name = "logout">
                        </form>
                        </a>
                        <!-- <a class="nav-link" href="#">Sign out</a> -->
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Big Wall Poster -->
<section class="poster">
    <div class="overlay">
        <div class="welcome-text">
            <?php
                echo "Welcome ".$_SESSION['username'].' !';
            ?>
        </div>
        <img src="../images/for_home/home-poster.jpg" alt="Big Wall Poster">
    </div>
</section>


    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2023 Ecommerce Webpage</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>