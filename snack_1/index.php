<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
$teams = [
    [
    "team" => "Juventus",
    "team_a" => "Inter",
    "score" => rand(1, 80),
    "score_a" => rand(1, 80),
    ],

    [
    "team" => "Milan",
    "team_a" => "Prato",
    "score" => rand(1, 80),
    "score_a" => rand(1, 80),  
    ],
   
];

// foreach ($teams as $team) {
//     var_dump($team);
//     echo $team['team'] . " - " . $team['team_a'] . " | " .  $team['score'] . " - " . $team['score_a'];
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP matches</title>
</head>
<body>

<?php foreach ($teams as $team) :
    // var_dump($team);
    
    ?>
    <p>
        <span> <?php echo $team['team'] . " - " . $team['team_a'] . " | " .  $team['score'] . " - " . $team['score_a']; ?></span>
    </p>
    
   

<?php endforeach; ?>

    
</body>
</html>