<?php

declare(strict_types=1);

require_once '../model/CompaniesManager.php';

$Companies = new CompaniesManager;
$resultsAll = $Companies->getAllCompanies();



             
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

        <?php foreach ($resultsAll as $each => $resultsAll ): ?>
            <div class="row align-items-center text-center ">
                <div class="col">
                    <h5 class="my-4">Name :</h5>
                    <?php echo $resultsAll['name_companies'] ?>
                </div>
                <div class="col">
                    <h5  class="my-4">TVA :</h5>
                    <a href="#" ><?php echo $resultsAll['vat_number'] ?></a>
        
                </div>
                <div class="col">
                    <h5  class="my-4">Country :</h5>
                    <?php echo $resultsAll['country'] ?>
                </div>
   
            </div>
        <?php endforeach; ?>
     

    </div>
    </main>
            
</body>
</html>