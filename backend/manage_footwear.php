<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    restock(9, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["two"])){
    restock(10, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["three"])){
    restock(11, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["four"])){
    restock(12, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["five"])){
    restock(13, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["six"])){
    restock(14, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["seven"])){
    restock(15, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
else if(isset($_POST["eight"])){
    restock(16, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/manage_footwear.php");
}
?>