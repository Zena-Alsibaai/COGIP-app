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
            FROM clients cl
            INNER JOIN companies co 
            ON cl.id_companies = co.id_companies 
            ORDER BY last_name ASC");
        $statment -> execute();
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }

    public function getDetailContacts($id){
        $db = $this->connectDB();
        $statment = $db->prepare(
            "SELECT * 
            FROM clients 
            WHERE id_client = :id ");
        $statment -> execute(["id"=>$id]);
        
    
        $detail_contacts = $statment->fetchAll(PDO::FETCH_ASSOC);
    
        return $detail_contacts;
    }
}
