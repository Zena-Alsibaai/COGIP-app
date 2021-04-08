<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class NewCompanies extends Manager {
    public function addCompanies($name_companies, $country, $vat_number, $id_types) {
            $db = $this->connectDB();
            $statment = $db->prepare(
            "INSERT INTO companies (name_companies, country, vat_number, id_types)
            VALUES (:name_companies, :country, :vat_number, :id_types)"
            );

            $statment->execute(["name_companies"=>$name_companies, 
                                "country"=>$country,
                                "vat_number"=>$vat_number,
                                "id_types"=>$id_types]);
    }
}

if(isset($_POST["submit"]) && isset($_POST["name_companies"]) && isset($_POST["country"]) && isset($_POST["vat_number"]) && isset($_POST["id_types"])) {
    $name_companies = $_POST["name_companies"];
    $country = $_POST["country"];
    $vat_number = $_POST["vat_number"];
    $id_types = $_POST["id_types"];

    $contact = new NewContact();
    $contact->addContact($name_companies, $country, $vat_number, $id_types);
}

?>