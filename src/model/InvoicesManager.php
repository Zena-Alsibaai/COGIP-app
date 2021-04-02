<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class InvoicesManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllUsers(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT number_of_invoices, date 
            FROM invoices ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }
}