<?php
    require "connect.php";
    $username = $passwd = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $passwd = test_input($_POST["passwd"]);
    // validate($username, $passwd);
        header("Location: ../frontend/home.php");
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>