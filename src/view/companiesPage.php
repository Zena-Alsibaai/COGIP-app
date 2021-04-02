<?php

declare(strict_types=1);

require_once '../model/CompaniesManager.php';

$Companies = new CompaniesManager;
$resultsAll = $Companies->getAllCompanies();


foreach($resultsAll as $each => $resultsAll );
             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Companies</title>
</head>
<body>
    <main>
    
    <div class="container">
        <H1 class="text-center my-5">Coucou famille Bot</H1>
        <div class="row align-items-center text-center ">
            <div class="col">
                <h4 class="my-2">Name :</h4>
                <?= $resultsAll['name_companies'] ?>
            </div>
            <div class="col">
                <h4  class="my-2">TVA :</h4>
                <a href="#" ><?= $resultsAll['vat_number'] ?></a>
        
            </div>
            <div class="col">
                <h4  class="my-2">Country :</h4>
                <?= $resultsAll['country'] ?>
            </div>
   
        </div>

    </div>
    </main>
            
</body>
</html>