<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class HomeManager extends Manager {

    public function getFiveClients() {
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM clients c
            INNER JOIN companies co
            ON c.id_companies = co.id_companies
            ORDER BY id_client DESC LIMIT 5");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveInvoices() {
        $statment = $this->connectDB()->query(
            "SELECT *
            FROM invoices i
            INNER JOIN companies co
            ON i.id_companies = co.id_companies
            ORDER BY id_invoices DESC LIMIT 5");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }

    public function getFiveCompanies() {
        $statment = $this->connectDB()->query(
            "SELECT * 
            FROM companies co
            INNER JOIN types_of_companies T
            ON co.id_types = T.id_types
            ORDER BY id_companies DESC LIMIT 5");
        
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;
    }
}