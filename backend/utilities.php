<?php

session_start();
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../index.php");
}

function restock($btn, $value){
     include "connect.php";
    // echo $btn." ".$value;
    $p_items = ["E-PROD001","E-PROD002", "E-PROD003", "E-PROD004", "E-PROD005","E-PROD006", "E-PROD007", "E-PROD008",
                        "F-PROD001","F-PROD002", "F-PROD003", "F-PROD004", "F-PROD005","F-PROD006", "F-PROD007", "F-PROD008",
                        "C-PROD001","C-PROD002", "C-PROD003", "C-PROD004", "C-PROD005","C-PROD006", "C-PROD007", "C-PROD008"]; 
    $p_id = "";
    switch($btn){
        case 1:
            $p_id = $p_items[0];
            break;
        case 2:
            $p_id = $p_items[1];
            break;
        case 3:
            $p_id = $p_items[2];
            break;
        case 4:
            $p_id = $p_items[3];
            break;
        case 5:
            $p_id = $p_items[4];
            break;
        case 6:
            $p_id = $p_items[5];
            break;
        case 7:
            $p_id = $p_items[6];
            break;
        case 8:
            $p_id = $p_items[7];
            break;
        case 9:
            $p_id = $p_items[8];
            break;
        case 10:
            $p_id = $p_items[9];
            break;
        case 11:
            $p_id = $p_items[10];
            break;
        case 12:
            $p_id = $p_items[11];
            break;
        case 13:
            $p_id = $p_items[12];
            break;
        case 14:
            $p_id = $p_items[13];
            break;
        case 15:
            $p_id = $p_items[14];
            break;
        case 16:
            $p_id = $p_items[15];
            break;
        case 17:
            $p_id = $p_items[16];
            break;
        case 18:
            $p_id = $p_items[17];
            break;
        case 19:
            $p_id = $p_items[18];
            break;
        case 20:
            $p_id = $p_items[19];
            break;
        case 21:
            $p_id = $p_items[20];
            break;
        case 22:
            $p_id = $p_items[21];
            break;
        case 23:
            $p_id = $p_items[22];
            break;
        case 24:
            $p_id = $p_items[23];
            break;
    }
    $query = "UPDATE product_availability SET currently_available = currently_available + $value WHERE product_id = '$p_id';";
    $statement = $conn->prepare($query);
    $statement->execute();
}
function update_available($btn, $value){
    include "connect.php";
    // echo $btn." ".$value;
    $p_items = ["E-PROD001","E-PROD002", "E-PROD003", "E-PROD004", "E-PROD005","E-PROD006", "E-PROD007", "E-PROD008",
                        "F-PROD001","F-PROD002", "F-PROD003", "F-PROD004", "F-PROD005","F-PROD006", "F-PROD007", "F-PROD008",
                        "C-PROD001","C-PROD002", "C-PROD003", "C-PROD004", "C-PROD005","C-PROD006", "C-PROD007", "C-PROD008"]; 
    $p_id = "";
    switch($btn){
        case 1:
            $p_id = $p_items[0];
            break;
        case 2:
            $p_id = $p_items[1];
            break;
        case 3:
            $p_id = $p_items[2];
            break;
        case 4:
            $p_id = $p_items[3];
            break;
        case 5:
            $p_id = $p_items[4];
            break;
        case 6:
            $p_id = $p_items[5];
            break;
        case 7:
            $p_id = $p_items[6];
            break;
        case 8:
            $p_id = $p_items[7];
            break;
        case 9:
            $p_id = $p_items[8];
            break;
        case 10:
            $p_id = $p_items[9];
            break;
        case 11:
            $p_id = $p_items[10];
            break;
        case 12:
            $p_id = $p_items[11];
            break;
        case 13:
            $p_id = $p_items[12];
            break;
        case 14:
            $p_id = $p_items[13];
            break;
        case 15:
            $p_id = $p_items[14];
            break;
        case 16:
            $p_id = $p_items[15];
            break;
        case 17:
            $p_id = $p_items[16];
            break;
        case 18:
            $p_id = $p_items[17];
            break;
        case 19:
            $p_id = $p_items[18];
            break;
        case 20:
            $p_id = $p_items[19];
            break;
        case 21:
            $p_id = $p_items[20];
            break;
        case 22:
            $p_id = $p_items[21];
            break;
        case 23:
            $p_id = $p_items[22];
            break;
        case 24:
            $p_id = $p_items[23];
            break;
    }
    $price = fetch_product($btn -1)['price'];
    $total = $value * $price;
    $product = fetch_product($btn -1)['product_name'];
    $sql = "INSERT INTO order_history (username, product_id, product_name, quantity, price, total) 
        VALUES ('" . $_SESSION['username'] . "', '$p_id', '$product', $value, $price, $total);";

    $conn->exec($sql);
    $query = "UPDATE product_availability SET currently_available = currently_available - $value WHERE product_id = '$p_id';";
    $statement = $conn->prepare($query);
    $statement->execute();
}


function fetch_product($i_num){
    include "connect.php";
    $p_items = ["E-PROD001","E-PROD002", "E-PROD003", "E-PROD004", "E-PROD005","E-PROD006", "E-PROD007", "E-PROD008",
                    "F-PROD001","F-PROD002", "F-PROD003", "F-PROD004", "F-PROD005","F-PROD006", "F-PROD007", "F-PROD008",
                    "C-PROD001","C-PROD002", "C-PROD003", "C-PROD004", "C-PROD005","C-PROD006", "C-PROD007", "C-PROD008"];
    
    // Check if $i_num is within the array bounds
    if ($i_num >= 0 && $i_num < count($p_items)) {
        $product_id = $p_items[$i_num];
        
        // Prepare and execute the SQL query
        $query = "SELECT product_name, product_description, price FROM product_detail WHERE product_id = :product_id";
        $statement = $conn->prepare($query);
        $statement->bindParam(':product_id', $product_id);
        $statement->execute();
        // Fetch the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        // Check if result is not empty
        //     Return the price
        if ($result) {
            return $result;
        } else {
            // Handle case where no result is found
            return "Price not found for product ID: $product_id";
        }
    } else {
        // Handle invalid $i_num
        return "Invalid product index";
    }
}

function validate($user_name, $passwd){
    include "connect.php";
    
    $query = "SELECT username, passwd FROM users WHERE username = :username AND passwd = :passwd";
    $statement = $conn->prepare($query);
    $statement->bindParam(':username', $user_name);
    $statement->bindParam(':passwd', $passwd);
    
    try {
        $statement->execute();
        
        // Fetch the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($result !== false){ // Check if any rows were returned
            if($result['username'] == 'MANAGER'){
                echo "Login Succesful";
                header("Location: ../frontend/manager.php");
            }
            // Perform further actions based on the result
            else{
                header("Location: ../frontend/home.php");
            }
        } else {
            echo "Wrong username or password";
        }
        $_SESSION['username'] = $user_name;
        // echo $_SESSION['username'];
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function insert($first, $last, $user_id, $pass){
    include "connect.php";
    if($user_id != "MANAGER"){
      $name = $first." ".$last;
      $sql = "INSERT INTO users (name, username, passwd)
      VALUES ('$name', '$user_id', '$pass')";
      try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header("Location: ../index.php");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }
    else{
      echo "Username cannot be created<br>";
    }
      
  }


?>