<?php


function update($btn, $value){
    include "connect.php";
    // echo $btn." ".$value;
    $p_electronics = ["E-PROD001","E-PROD002", "E-PROD003", "E-PROD004", "E-PROD005","E-PROD006", "E-PROD007", "E-PROD008",
                        "F-PROD001","F-PROD002", "F-PROD003", "F-PROD004", "F-PROD005","F-PROD006", "F-PROD007", "F-PROD008",
                        "C-PROD001","C-PROD002", "C-PROD003", "C-PROD004", "C-PROD005","C-PROD006", "C-PROD007", "C-PROD008"]; 
    $p_id = "";
    switch($btn){
        case 1:
            $p_id = $p_electronics[0];
            break;
        case 2:
            $p_id = $p_electronics[1];
            break;
        case 3:
            $p_id = $p_electronics[2];
            break;
        case 4:
            $p_id = $p_electronics[3];
            break;
        case 5:
            $p_id = $p_electronics[4];
            break;
        case 6:
            $p_id = $p_electronics[5];
            break;
        case 7:
            $p_id = $p_electronics[6];
            break;
        case 8:
            $p_id = $p_electronics[7];
            break;
    }
    $query = "UPDATE product_availability SET currently_available = currently_available - $value WHERE product_id = '$p_id';";
    $statement = $conn->prepare($query);
    $statement->execute();
}
?>