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
        case 9:
            $p_id = $p_electronics[8];
            break;
        case 10:
            $p_id = $p_electronics[9];
            break;
        case 11:
            $p_id = $p_electronics[10];
            break;
        case 12:
            $p_id = $p_electronics[11];
            break;
        case 13:
            $p_id = $p_electronics[12];
            break;
        case 14:
            $p_id = $p_electronics[13];
            break;
        case 15:
            $p_id = $p_electronics[14];
            break;
        case 16:
            $p_id = $p_electronics[15];
            break;
        case 17:
            $p_id = $p_electronics[16];
            break;
        case 18:
            $p_id = $p_electronics[17];
            break;
        case 19:
            $p_id = $p_electronics[18];
            break;
        case 20:
            $p_id = $p_electronics[19];
            break;
        case 21:
            $p_id = $p_electronics[20];
            break;
        case 22:
            $p_id = $p_electronics[21];
            break;
        case 23:
            $p_id = $p_electronics[22];
            break;
        case 24:
            $p_id = $p_electronics[23];
            break;
    }
    $query = "UPDATE product_availability SET currently_available = currently_available - $value WHERE product_id = '$p_id';";
    $statement = $conn->prepare($query);
    $statement->execute();
}
?>