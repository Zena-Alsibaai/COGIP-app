<?php

declare(strict_types=1);

require_once '../model/InvoicesManager.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOGIP</title>
</head>
<body>
<?php include('./includes/header.php'); ?>
<main>
<div class="titleInvoices">
    <h1>COGIB : List of invoices</h1>
</div>
<section class="allData">
<div class="data invoiceNumber">
    <h3>Invoice number</h3>
    <div>
        <p class='alignement'><a  href="#">
            <?php 
                $invoices = new InvoicesManager();
                $resultsAll = $invoices->getAllUsers();
                foreach ($resultsAll as $key => $invoice) {
                    //var_dump($product['productCode']);
                    echo $invoice['number_of_invoices']. '</br>'.'</br>';
                }
            ?>
        </a></p>
    </div>
</div>
<div class="data dates">
    <h3>Dates</h3>
    <div>
        <p class='alignement'>
        <?php 
                foreach ($resultsAll as $key => $date) {
                    //var_dump($product['productCode']);
                    echo $date['date']. '</br>'.'</br>';
                }
            ?>
        </p>
    </div>
</div>
<div class="data companies">
    <h3>Companies</h3>
    <div>
        <p class='alignement'>Maison du sex et du plaisir</p>
    </div>
</div>
<div class="data type">
    <h3>Type</h3>
    <div>
        <p class='alignement'>fournisseur</p>
    </div>
</div>

</section>

</main>
    
</body>
</html>