<?php

declare(strict_types=1);

require_once '../model/ClientsManager.php';

$Clients = new ClientsManager;
$resultsAll = $Clients->getAllUsers();

foreach($resultsAll as $each => $resultsAll ){
            echo $resultsAll['first_name'] . '<br>';
        }