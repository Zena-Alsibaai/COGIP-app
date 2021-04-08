<?php

declare(strict_types=1);

require_once '../model/Manager.php';

class DeleteManager extends Manager {
    public function deleteContact($id) {
        $db = $this->connectDB();
            $statment = $db->prepare(
                "DELETE FROM clients
                WHERE id_client = :id"
            );
        
        $statment->execute(["id"=>$id]);
    }

    public function deleteCompanies($id) {
        $db = $this->connectDB();
            $statment = $db->prepare(
                "DELETE FROM companies
                WHERE id_companies = :id"
            );
        
        $statment->execute(["id"=>$id]);
    }

    public function deleteInvoices($id) {
        $db = $this->connectDB();
            $statment = $db->prepare(
                "DELETE FROM invoices
                WHERE id_invoices = :id"
            );
        
        $statment->execute(["id"=>$id]);
    }
}

if(isset ($_GET["mode"]) && $_GET["mode"] == "deleteContact") {
    $deleteCon = new DeleteManager();
    $deleteCon->deleteContact($_GET["id"]);
    
    header ('location:../view/homePage.php');
}

?>