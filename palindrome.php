<?php

$text = $_GET["text"];


if (strrev($text) == $text) {
    $res = "true";
}
else{
    $res = "false";
}

$results = ["palindrome" => $res];

echo json_encode($results);


?>