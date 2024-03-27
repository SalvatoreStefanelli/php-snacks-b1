<?php 

// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
    [
        "name" => "Gianluca",
        "lastname" => "Bagante",
        "votes" => [1,2,2,3,1,3]
    ],

    [
        "name" => "Sarah",
        "lastname" => "Elsharkawy",
        "votes" => [1,2,2,3,1,3]
    ],

    [
        "name" => "Cristina",
        "lastname" => "G.",
        "votes" => [1,2,2,3,1,3]
    ],

    [
        "name" => "Riccardo",
        "lastname" => "Montalto",
        "votes" => [1,2,2,3,1,3]
    ],

    [
        "name" => "Andrea",
        "lastname" => "Parrini",
        "votes" => [1,2,2,3,1,3]
    ],    
];

?>

<?php

    foreach ($students as $student) : ?>
    <?php //   var_dump($student); ?>

<?php        echo '<div>';
        echo $student['name'] . ' ' . $student['lastname'] . ' | votes avg: ' . array_sum($students[2]['votes']) / count($students[2]["votes"]); 
        echo '</div>'; 
?>

    <?php endforeach; ?>

// var_dump(array_sum($students[2]['votes']) / count($students[2]["votes"]));
