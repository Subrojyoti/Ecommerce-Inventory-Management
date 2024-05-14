<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    update_available(1, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["two"])){
    update_available(2, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["three"])){
    update_available(3, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["four"])){
    update_available(4, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["five"])){
    update_available(5, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["six"])){
    update_available(6, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["seven"])){
    update_available(7, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["eight"])){
    update_available(8, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
?>