<?php

declare(strict_types=1);

require_once '../model/manager.php';

class InvoicesManager extends Manager{

    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllUsers(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT number_of_invoices, date, name_companies, types_of FROM invoices INNER JOIN companies ON invoices.id_companies = companies.id_companies INNER JOIN types_of_companies ON companies.id_types = types_of_companies.id_types");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

    }
}