<?php

declare(strict_types=1);

require_once '../model/InvoicesManager.php';

$invoices = new InvoicesManager();
$resultsAll = $invoices->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>GOGIP-Invoices Page</title>
</head>
<body>
<?php include('./includes/navbar.php'); ?>
<main>
<div class="titleInvoices">
    <h1>COGIB : List of invoices</h1>
</div>
<section class="allData">
<div class="data invoiceNumber">
    <h3>Invoice number</h3>
    <div>
        <p class='alignement'><a  href="./detailInvoice.php">
            <span>
            <?php 
                
                foreach ($resultsAll as $key => $invoice) {
                    echo $invoice['number_of_invoices']. '</br>'.'</br>';
                }
            ?>
            </span>
        </a></p>
    </div>
</div>
<div class="data dates">
    <h3>Dates</h3>
    <div>
        <p class='alignement'>
        <?php 
                foreach ($resultsAll as $key => $date) {
                    echo $date['date']. '</br>'.'</br>';
                }
            ?>
        </p>
    </div>
</div>
<div class="data companies">
    <h3>Companies</h3>
    <div>
        <p class='alignement'>
        <?php 
                foreach ($resultsAll as $key => $companie) {
                    echo $companie['name_companies']. '</br>'.'</br>';
                }
            ?>
        </p>
    </div>
</div>
<div class="data type">
    <h3>Type</h3>
    <div>
        <p class='alignement'>
        <?php

                foreach($resultsAll as $key => $type){
                    echo $type['types_of'] . '</br>' . '</br>' ;
                }

        ?>
        </p>
    </div>
</div>

</section>

</main>
    
</body>
</html>