<?php
declare(strict_types=1);

// namespace Becode\MVCBoilerplate\Model;

class Manager
{
	protected function connectDB() {
        try {
            $db = new PDO("mysql:host=remotemysql.com;dbname=yrsoxbGqbm;port=3306","yrsoxbGqbm","gjTYFKCudH");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
            }catch(Exception $e){
                echo $e->getMessage();
                exit;
            };
    }
}