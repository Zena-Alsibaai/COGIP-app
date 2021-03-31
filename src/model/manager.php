<?php
declare(strict_types=1);

// namespace Becode\MVCBoilerplate\Model;

class Manager
{
	protected function connectDB() {
        try {
            $db = new PDO("mysql:host=mysql;dbname=yrsoxbGqbm;port=3306", "yrsoxbGqbm", "gjTYFKCudH");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }
}