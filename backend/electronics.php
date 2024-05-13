<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    update(1, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["two"])){
    update(2, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["three"])){
    update(3, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["four"])){
    update(4, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["five"])){
    update(5, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["six"])){
    update(6, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["seven"])){
    update(7, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
else if(isset($_POST["eight"])){
    update(8, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/electronics.php");
}
?>