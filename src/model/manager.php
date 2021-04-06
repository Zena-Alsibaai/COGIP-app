<?php
declare(strict_types=1);

// namespace Becode\MVCBoilerplate\Model;


// Lien vers la base de donnée
// protected pour éviter que qqun ne change le lien vers la db
class Manager
{
	protected function connectDB() {
        try {
            $dsn= "mysql:host=remotemysql.com;dbname=yrsoxbGqbm;port=3306";
            $db = new PDO($dsn, "yrsoxbGqbm", "gjTYFKCudH"); 
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
            
        } catch(Exception $e) {
            die("Error : ".$e->getMessage()); // affichage erreur
        }
    }
}