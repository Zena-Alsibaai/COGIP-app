
<?php
// declare(strict_types=1);
require_once '../model/CompaniesManager.php';
$Companies = new CompaniesManager;
$companiesDetails = $Companies->getCompaniesDetails($_GET["id"]); 
$companiesInvoices = $Companies->getCompaniesInvoices($_GET["id"]);
$companiesContactPersons = $Companies ->getCompaniesContactPersons($_GET["id"]);
// On appele toutes les fonction qui sont dans le fichier manager en les stoquant dans des variables qu'on va utiliser plus bas pour l'affichage 





   
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
    <div class="row list-group text-center">

        
        
        <table style="width:100%" class="table table-striped table-hover my-5">
            <h4 class="my-5">Company :</h4>
            <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Company name : </th>
                <th class="shadow p-3 ">TVA :  </th>
                <th class="shadow p-3 ">Type : </th>
             
            </tr>
            <tr >
            <tr >
            <?php 
                foreach($companiesDetails as  $details => $result){
                    $companiesName = $result['name_companies'];
                    $companiesId= $result['id_companies'];
                    $vatNumber= $result['vat_number'];
                    $type=$result['id_types'];

            
                    echo '<tr >'
                    
                    .'<td class="shadow p-3 ">' . $companiesName . ' ' . ' </td>'
                    .'<td class="shadow p-3 ">' . $vatNumber . ' ' . ' </td>'
                    .'<td class="m-5 p-4 " >'. $type . ' ' .' </td>';
                    
                }  
                
            ?>
            </tr> 
        </table>

        <table style="width:100%" class="table table-striped table-hover">
        
        <h4 class="my-5">Invoices :</h4>
        
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Invoice number : </th>
                <th class="shadow p-3 ">Date : </th>
                <th class="shadow p-3 ">Contact person : </th>
             
            </tr>
            <tr >
            <?php
            
            foreach($companiesInvoices as $invoice ){

                echo '<tr >'
                .'<td class="m-5 p-4 " > ' . $invoice['number_of_invoices'] . ' ' . ' </td>'
                .'<td class="m-5 p-4 " > ' . $invoice['date'] . ' ' . ' </td>'  
                .'<td class="m-5 p-4 " > ' . $invoice['first_name'] . ' ' .$invoice['last_name'].' </td>'  ;
                // .'<td class="m-5 p-4 text-info bg-dark" >';
            }
            
            
            
            ?>
           
            </tr> 
        </table>  
        
        <table style="width:100%" class="table table-striped table-hover">
        
        <h4 class="my-5">Contact persons :</h4>
        
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name : </th>
                <th class="shadow p-3 ">Email : </th>
                <th class="shadow p-3 "></th>
                
             
            </tr>
            <tr >
            <?php
            
            foreach($companiesContactPersons as $person ){

                echo '<tr >'
                .'<td class="m-5 p-4 " > ' . $person['first_name'] . ' ' . $person['last_name'] .' ' .' </td>'
                .'<td class="m-5 p-4 " > ' . $person['email'] . ' ' . ' </td>'  ;
                // .'<td class="m-5 p-4 text-info bg-dark" >';
            }
            
            
            
            ?>
           
            </tr> 
        </table> 
            
    </div>
    </main>
 
    <?php require 'includes/footer.php' ?>     
</body>
</html>