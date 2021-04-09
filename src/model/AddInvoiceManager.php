<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class NewInvoice extends Manager {
    public function addInvoice($number_of_invoices, $date, $id_companies, $id_clients) {
            $db = $this->connectDB();
            $statment = $db->prepare(
            "INSERT INTO invoices (number_of_invoices, date, id_companies, id_clients)
            VALUES (:number_of_invoices, :date, :id_companies, :id_clients)"
            );

            $statment->execute(["number_of_invoices"=>$number_of_invoices, 
                                "date"=>$date,
                                "id_companies"=>$id_companies,
                                "id_clients"=>$id_clients]);
    }
}

if(isset($_POST["submit"]) && isset($_POST["number_of_invoices"]) && isset($_POST["date"]) && isset($_POST["id_companies"]) && isset($_POST["id_clients"])) {
    $number_of_invoices = $_POST["number_of_invoices"];
    $date = $_POST["date"];
    $id_companies = $_POST["id_companies"];
    $id_clients = $_POST["id_clients"];

    $invoice = new NewInvoice();
    $invoice->addInvoice($number_of_invoices, $date, $id_companies, $id_clients);
}

?>