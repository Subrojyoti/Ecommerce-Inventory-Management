<?php


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
        if ($result) {
            // Return the price
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
// echo fetch_price(3)['product_name'];
// echo fetch_price(3)['price'];
?>