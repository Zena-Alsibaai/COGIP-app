<?php

declare(strict_types=1);

require '../model/ClientsManager.php';

$Clients = new ClientsManager;
$resultsAll = $Clients->getAllUsers();

foreach($resultsAll as $each => $resultsAll ){
            echo $resultsAll['first_name'] . '<br>';
        }

echo "Coucou famille Bot";