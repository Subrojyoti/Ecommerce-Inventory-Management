<?php
// require "connect.php";
include "utilities.php";
echo "hello";
if(isset($_POST["one"])){
    restock(1, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_electronics.php");
}
else if(isset($_POST["two"])){
    restock(2, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_electronics.php");
}
else if(isset($_POST["three"])){
    restock(3, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_electronics.php");
}
else if(isset($_POST["four"])){
    restock(4, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_electronics.php");
}
else if(isset($_POST["five"])){
    restock(5, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_manage_electronics.php");
}
else if(isset($_POST["six"])){
    restock(6, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_manage_electronics.php");
}
else if(isset($_POST["seven"])){
    restock(7, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_manage_electronics.php");
}
else if(isset($_POST["eight"])){
    restock(8, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_manage_electronics.php");
}
?>