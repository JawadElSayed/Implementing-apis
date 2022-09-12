<?php

$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $_POST["num3"];


$total = ($a**3) + ($b*$c) - ($a/$b);

$results = ["total" => $total];

echo json_encode($results);

?>