<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    echo "hello";
    restock(17, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["two"])){
    restock(18, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["three"])){
    restock(19, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["four"])){
    restock(20, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["five"])){
    restock(21, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["six"])){
    restock(22, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["seven"])){
    restock(23, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
else if(isset($_POST["eight"])){
    restock(24, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_clothing.php");
}
?>