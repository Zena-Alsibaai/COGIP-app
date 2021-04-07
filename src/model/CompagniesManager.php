<?php

declare(strict_types=1);

require_once('Manager.php');

class CopaniesManager extends Manager {

    private $name_companies;
    private $country;
    private $vat_number;

    //=== Construct ===

    public function __construct(string $name_companies, string $country, int $vat_number) {
        $this->name_companies = $name_companies;
        $this->country = $country;
        $this->vat_number = $vat_number;
    }

    //=== Display all companies ===
    public function getCompanies() {

        $db = $this->connectDb();

        $request = $db->query("SELECT ... AS ...
                    FROM ...
                    ORDER BY ...
                    DESC");

        return $request->fetch(PDO::FETCH_ASSOC);
    }

    //=== Display by ID ===
    public function getCompany(int $companyId) {
        $db = $this->connectDb();

        $request = $db->prepare("SELECT ... AS ...
                                FROM ...
                                WHERE id = ?");
        
        $request->bindParam(1, $this->companyId, PDO::PARAM_STR);
        $request->execute();
        $company = $request->fetch();

        return $company;
    }
}

?>