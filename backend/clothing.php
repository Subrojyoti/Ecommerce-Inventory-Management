<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    echo "hello";
    update_available(17, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["two"])){
    update_available(18, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["three"])){
    update_available(19, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["four"])){
    update_available(20, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["five"])){
    update_available(21, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["six"])){
    update_available(22, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["seven"])){
    update_available(23, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
else if(isset($_POST["eight"])){
    update_available(24, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/clothing.php");
}
?>