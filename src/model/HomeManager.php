<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class HomeManager extends Manager {

    public function getFiveClients() {
        $statment = $this->connectDB()->query(
            "SELECT first_name 
            FROM clients ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveInvoices() {
        $statment = $this->connectDB()->query(
            "SELECT number_of_invoices 
            FROM invoices ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveCompanies() {
        $statment = $this->connectDB()->query(
            "SELECT name_companies 
            FROM companies ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }
}