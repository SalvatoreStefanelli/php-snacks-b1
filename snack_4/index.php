<?php

// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$list = [];

while (count($list) < 15) {
$randomNumber = rand(1, 100);

if(!in_array($randomNumber, $list)) {
    // $list[] = $randomNumber;  (si può usare sia in questo modo)
    array_push($list, $randomNumber); // che in questo modo 
}

}

var_dump($list);






?>