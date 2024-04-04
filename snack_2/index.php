<!-- ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato -->


<?php
var_dump(isset($_GET['name']) && strlen($_GET['name']) > 3);

var_dump(isset($_GET['mail']), $_GET['mail'], str_contains($_GET['mail'], '@'), str_contains($_GET['mail'], '.'));

var_dump(isset($_GET['age']), $_GET['age'], is_numeric($_GET['age']));

$canAccess;

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    var_dump('error');
} elseif (strlen($_GET['name']) <= 3) {
   echo 'CANNOT ACCESS'; 
} elseif (!str_contains($_GET['mail'], '@') || !str_contains($_GET['mail'], '.')) {
    echo 'CANNOT ACCESS';
} elseif (!is_numeric($_GET['age'])) {
    echo 'CANNOT ACCESS';
} else {
    echo 'ACCESS ALLOWED';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
     <!-- <h1> <?= $name; ?> <?= $mail; ?> <?= $age; ?> </h1>

     <?php if(!empty($_GET) && in_array('name', $_GET)) : ?>

     <?php endif; ?> -->

     <form action="" method="get">

        <label for="name">Your name</label>
        <input type="text" name="name" id="name">

        <label for="mail">Your mail</label>
        <input type="text" name="mail" id="mail">

        <label for="age">Your age</label>
        <input type="text" name="age" id="age"> 

        <button type="submit">Submit</button>

     </form>

        
</body>
</html>










