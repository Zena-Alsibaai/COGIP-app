<?php
declare(strict_types=1);

require_once '../model/Manager.php';

class CompaniesManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getCompaniesClients(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM companies 
            INNER JOIN types_of_companies
            ON types_of_companies.id_types = companies.id_types 
            WHERE types_of= 'client'
            ");


        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }

    public function getCompaniesSuppliers(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM companies 
            INNER JOIN types_of_companies
            ON types_of_companies.id_types = companies.id_types 
            WHERE types_of= 'supplier'
            ");


        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }

  

  

}

