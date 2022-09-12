<?php


$d1=strtotime("25 dec");

$d2=ceil(($d1-time())/60/60/24);

if ($d2 > 0) {
    $results = ["days" => $d2];
}
else{
    $results = ["days" => 0];
}


echo json_encode($results);

?>