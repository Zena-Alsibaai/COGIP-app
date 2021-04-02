<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class HomeManager extends Manager {

    public function getFiveClients() {
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM clients ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveInvoices() {
        $statment = $this->connectDB()->query(
            "SELECT *
            FROM invoices ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveCompanies() {
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM companies ");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }
}