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
    <title>Detail invoice</title>
</head>
<body>
<?php include('./includes/header.php'); ?>

<main>
<h1 class='titleDetailInvoices'>
    Invoice : 
    <?php 
       
    ?>
</h1>

</main>


</body>
</html>