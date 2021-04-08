<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class NewContact extends Manager {
    public function addContact($last_name, $first_name, $email, $id_companies) {
            $db = $this->connectDB();
            $statment = $db->prepare(
            "INSERT INTO clients (first_name, last_name, email, id_companies)
            VALUES (:first_name, :last_name, :email, :id_companies)"
            );

            $statment->execute(["first_name"=>$first_name, 
                                "last_name"=>$last_name,
                                "email"=>$email,
                                "id_companies"=>$id_companies]);
    }
}

if(isset($_POST["submit"]) && isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["email"]) && isset($_POST["companies"])) {
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $id_companies = $_POST["companies"];

    $contact = new NewContact();
    $contact->addContact($last_name, $first_name, $email, $id_companies);
}

?>