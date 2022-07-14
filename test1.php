<?php
    // $name = "Harsha Gunawardane";
    // echo "Hello $name";

    $laptop_brands = array("HP", "DELL", "ASUS"); 
    // echo var_dump($laptop_brands);
    echo var_dump($laptop_brands[0]);

    define("lap", "HP-65"); // simmilar to dictionary, cnnt change
    echo lap;

    $var = 5;
    if($var > 6){
        echo "$var > 6";
    }else{
        echo "$var < 6";
    }

    $res = "A";
    switch($res){
        case "A+" : 
        case "A" : echo "gpa -> 4";
        break;
        case "A-" : echo "gpa -> 3.3";
        break;

    }
?>