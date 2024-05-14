<?php
// require "connect.php";
require "utilities.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first = test_input($_POST["first"]);
    $last = test_input($_POST["last"]);
    $user_name = test_input($_POST["username"]);
    $passwd = test_input($_POST["password"]);
    try{
        insert($first, $last, $user_name, $passwd);
        // header("Location: ../index.php");
    }
    catch(Exception $e){
        echo "Insertion failed<br>";
        header("Location: ../register.php");
    }


 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>