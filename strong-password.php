<?php

$pass = $_POST["password"];

// testing password function
function test($pass) {
    $con1 = false;
    $con2 = false;
    $con3 = false;
    $con4 = false;
    $con5 = false;

    // testing  length of password
    if (strlen($pass) >= 12){
        $con1 = true;
    }

    for ($x = 0 ; $x < strlen($pass) ; $x++){
        // testing  capital letter
        if (ctype_upper($pass[$x])){
            $con2 = true;
        } 
        // testing  lower letter
        if (ctype_lower($pass[$x])){
            $con3 = true;
        } 
        // testing  special char
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass[$x])){
            $con4 = true;
        }
        // testing  including number
        if (is_numeric($pass[$x])){
            $con5 = true;
        } 
    }
    if ($con1 && $con2 && $con3 && $con4 && $con5){
        return "strong";
    }
    return "weak";
}

$res = test($pass);

$results = ["result" => $res];

echo json_encode($results);




?>