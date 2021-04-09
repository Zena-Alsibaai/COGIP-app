<?php
declare(strict_types=1);
require_once '../model/manager.php';
class InvoicesManager extends Manager{
    // public pour pouvoir utiliser en appellant la fonction getAllUsers()
    public function getAllUsers(){
        // query est équivalant à prepare.
        $statment = $this->connectDB()->query(
            "SELECT * FROM invoices INNER JOIN companies ON invoices.id_companies = companies.id_companies INNER JOIN types_of_companies ON companies.id_types = types_of_companies.id_types");
            // traitement de données récoltée dans la requete.
            $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
            return $resultsAll;
        }
        public function detailsInvoices($id){
            $statment = $this->connectDB()->prepare(
                "SELECT * FROM invoices INNER JOIN companies ON invoices.id_companies = companies.id_companies INNER JOIN types_of_companies ON companies.id_types = types_of_companies.id_types WHERE id_invoices = :id ");
                $statment->execute(['id'=>$id]);
            // traitement de données récoltée dans la requete.
            $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
            return $resultsAll;
        }
        public function getCompaniesContactPersons($id){
            // query est équivalant à prepare.
            $db = $this->connectDB();
            $statment = $db-> prepare(
                "SELECT * 
                FROM clients
                WHERE id_companies  = :id
                ");
            $statment ->execute(["id"=>$id]);
            // traitement de données récoltée dans la requete.
            $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
            return $resultsAll;
        }
    }
                



        

    

            


    

    


        