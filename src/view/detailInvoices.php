
<?php
// declare(strict_types=1);
require_once '../model/InvoicesManager.php';
$invoices = new InvoicesManager();
$detailInvoices = $invoices->detailsInvoices($_GET["id"]); 
$detailClient = $invoices->getCompaniesContactPersons($_GET["id"]);
// On appele toutes les fonction qui sont dans le fichier manager en les stoquant dans des variables qu'on va utiliser plus bas pour l'affichage 
$numberPhone = 'NULL';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Companies Details</title>
</head>
<body>
    <?php require 'includes/navbar.php' ?>
     <!-- Header-->
     <header class="py-5 bg-dark">
        <div class="container">
            <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4"> Companies Details</h1>
        </div>
    </header>
    <!-- Page Content -->
    <main class="container">
        <h2 class='text-center'>Invoices : 
        <?php 
            foreach( $detailInvoices as  $key => $result){
                    $numberInvoices = $result['number_of_invoices'];
                    echo '<span>'. $numberInvoices.'</br>' . '</span>';
                }
            ?>
        </h2>
            <h5>Company linked to the invoice</h5>
            <table style="width:100%" class="table table-striped table-hover">
            <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name </th>
                <th class="shadow p-3 ">TVA </th>
                <th class="shadow p-3 ">Company type</th>
            </tr>
            <tr>
            <?php
                foreach($detailInvoices as $key => $detail){
                    echo '<tr>' . '<td class="m-5 p-4 " > ' . $detail['name_companies'] . ' ' . ' </td>'. '<td class="m-5 p-4 " > ' .  $detail['vat_number'] . ' </td>'. '<td class="m-5 p-4 " > ' .  $detail['types_of'] . ' </td>';
                }
            ?>
            </tr>
            </table>
            <h5>Contact person</h5>
            <table style="width:100%" class="table table-striped table-hover">
            <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name </th>
                <th class="shadow p-3 ">Email</th>
                <th class="shadow p-3 ">Phone</th>
            </tr>
            <tr>
            <?php
                foreach( $detailClient as $key => $detail){
                    echo '<tr>' . '<td class="m-5 p-4 " > ' . $detail['first_name'] . ' ' . $detail['last_name'] . '<td class="m-5 p-4 " > ' .  $detail['email'] . ' </td>'. '<td class="m-5 p-4 " > ' .  $numberPhone . ' </td>';
                }
            ?>
            </tr>
            </table>
    </main>
    <?php require 'includes/footer.php' ?>     
</body>
</html>
        
                
            
                
            





                


 
            



                

