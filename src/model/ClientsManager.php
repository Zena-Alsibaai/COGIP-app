<?php

declare(strict_types=1);

require_once '../model/Manager.php';

// l'appel de la db est protected. Donc nous allons passer par un enfant 'ClientsManager' qui est une extension de Manager
class ClientsManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllContacts(){
        // query est équivalant à prepare.
        $db = $this->connectDB();
        $statment = $db->prepare(
            "SELECT* 
            FROM clients ");
        $statment -> execute();
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }

    public function getSingleClient(){
        // query est équivalant à prepare.
        $db = $this->connectDB();
        $statment = $db->prepare(
            "SELECT* 
            FROM clients 
             ");
        $statment -> execute();

        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);

        //return $resultsAll;
        foreach($resultsAll as $guest => $value){
            
            echo "$guest. $value ";
            //echo $guest['first_name'];
            var_dump($guest);
            
        };

    }
}
