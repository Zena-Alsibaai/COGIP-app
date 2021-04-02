<?php

declare(strict_types=1);

require_once '../model/Manager.php';

// l'appel de la db est protected. Donc nous allons passer par un enfant 'ClientsManager' qui est une extension de Manager
class ClientsManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllUsers(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT* 
            FROM clients ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
        

    }
}
