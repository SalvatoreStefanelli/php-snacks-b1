<!-- Challenge Description:
Create a simple PHP script that takes a user's name through a GET request and prints a greeting message to the user. If no name is provided, it should print a default greeting message.
Hint:
You can access the parameters passed through a GET request using the $_GET superglobal array. Check if the 'name' key exists and is not empty before using it.
Starting Code: -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="" method="get">
        <label for="name"></label>
        <input type="text" name="name" id="name" required>
    
        <button type="submit">Submit</button>
    </form>
        

</body>
</html>

<?php 

    $name = $_GET['name'];
    var_dump(isset($_GET['name']), $_GET['name']);

    $printMessage;

    if(empty($_GET['name'])) {
        echo 'immetti il tuo nome';
    } else {
        echo 'Ciao ' . $name .  ', benvenuto in chat';
    }
    ?>