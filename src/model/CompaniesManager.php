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
    // =========== une fonction pour récupere les info sur chaque company quaan on click sue le lien
    // 1- on remplace la variable $statment en $db pour la connexion à la DB
    // 2- puis on prepare la requête dans la variable $statement
    // ***:id = Marqueur nominatif pour ne pads utiliser de php dans le sql au lieu de $ id on fait :id
    // on ajoute $id dans le paramètre de fonction pour pouvoir l'utiliser dans la variable statment
    public function getCompaniesDetails($id){
        // query est équivalant à prepare.
        $db = $this->connectDB();
        $statment = $db-> prepare(
            "SELECT * 
            FROM companies c
            INNER JOIN types_of_companies t
            ON c.id_types = t.id_types
            WHERE id_companies = :id
            ");
        $statment ->execute(["id"=>$id]);
        // traitement de données récoltée dans la requete.
        $resultsAll = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAll;

        

    }

 // =========== une fonction pour récupere les factures qui appartientent à chaque company
 // 1- i, c = pour renomer mes variables et faciler l'utilisation par la suite
 // "ON" = pour savoir dans quelles colonnes on doit chercher les info dans les deux tableaux
 // "WHERE" la condition 
    public function getCompaniesInvoices($id){
        // query est équivalant à prepare.
        $db = $this->connectDB();
        $statment = $db-> prepare(
            "SELECT * 
            FROM invoices i
            INNER JOIN clients c
            ON i.id_clients = c.id_client
            WHERE i.id_companies  = :id
            ");
        $statment ->execute(["id"=>$id]);


        
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

