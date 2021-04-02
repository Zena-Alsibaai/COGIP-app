<?php

    require_once './model/Manager.php';
    //require_once './model/CompaniesManager.php';
    //require_once './model/ClientsManager.php';
    //require_once './model/InvoicesManager.php';

    echo "coucou";
 
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

    <h1> test</h1>
        <?php 

        $object = new ClientsManager;
        echo $object->getAllUsers();
    
        ?>

    </body>
</html>