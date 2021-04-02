<?php
    try {
        $db = new PDO("mysql:host=remotemysql.com;dbname=yrsoxbGqbm;port=3306", "yrsoxbGqbm", "gjTYFKCudH");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return $db;
    } catch(Exception $e) {
        die("Error : ".$e->getMessage());
    }

    try {
        $results = $db->prepare("SELECT first_name FROM clients");
        $results->execute();
    }catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }

    $display = $results->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Welcome to the COGIP!</h1>
        <ol>
        <?php
            foreach($display as $key => $display) {
                echo "<li>" .$display['first_name']. "</li>";
            }
        ?>
    </ol>
    </body>
</html>