<?php
declare(strict_types=1);

require_once '../model/Manager.php';

class CompaniesManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllCompanies(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT* 
            FROM companies");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }

}