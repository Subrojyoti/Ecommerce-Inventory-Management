<?php
    require "connect.php";
    include "utilities.php";
    $user_name = $passwd = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = test_input($_POST["username"]);
        $passwd = test_input($_POST["passwd"]);
        validate($user_name, $passwd);
        // header("Location: ../frontend/home.php");
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>