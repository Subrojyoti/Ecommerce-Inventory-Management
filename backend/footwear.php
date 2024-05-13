<?php
// require "connect.php";
include "utilities.php";
if(isset($_POST["one"])){
    update(9, $_POST["quantity1"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["two"])){
    update(10, $_POST["quantity2"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["three"])){
    update(11, $_POST["quantity3"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["four"])){
    update(12, $_POST["quantity4"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["five"])){
    update(13, $_POST["quantity5"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["six"])){
    update(14, $_POST["quantity6"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["seven"])){
    update(15, $_POST["quantity7"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
else if(isset($_POST["eight"])){
    update(16, $_POST["quantity8"]);
    echo "Order placed successfully";
    header("Location: ../frontend/footwear.php");
}
?>