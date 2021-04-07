<?php

declare(strict_types=1);

require_once '../model/CompaniesManager.php';

$Companies = new CompaniesManager;
$resultsAll = $Companies->getCompaniesClients(); 
$resultsSuppliers= $Companies-> getCompaniesSuppliers();
    
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
    <?php require 'includes/navbar.php' ?>
     <!-- Header-->
     <header class="py-5 bg-dark">
        
        <div class="container">
            <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-1">COGIP : Companies Directory</h1>
            
        </div>
    </header>
    <!-- Page Content -->
    <main class="container">
    
    <div class="row list-group text-center">

        <h2 class="my-5">Clients :</h2>
        
        <table style="width:100%" class="table table-striped table-hover">
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name : </th>
                <th class="shadow p-3 ">TVA : </th>
                <th class="shadow p-3 ">Country : </th>
                <th class="shadow p-3 "></th>
            </tr>
            <tr >
                <?php 
                    foreach($resultsAll as  $resultsAll){
                        $companiesName = $resultsAll['name_companies'];
                        $vatNumber= $resultsAll['vat_number'];
                        $country = $resultsAll['country'];
                        
                        echo '<tr >'
                        .'<td class="m-5 p-4 " > ' . $companiesName . ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $vatNumber . ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $country . ' ' . ' </td>'
                        .'<td class="m-5 p-4 text-info bg-dark" >
                        <a href="companiesDetailsPage.php" type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                        }  
                ?>
            </tr> 
        </table>

        <table style="width:100%" class="table table-striped table-hover">
        
            <h2 class="my-5">Suppliers :</h2>
        
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name : </th>
                <th class="shadow p-3 ">TVA : </th>
                <th class="shadow p-3 ">Country : </th>
                <th class="shadow p-3 "></th>
            </tr>
            <tr >
                <?php 
                    foreach($resultsSuppliers as $result){
                        $suppliersCompaniesName = $result['name_companies'];
                        $suppliersVatNumber= $result['vat_number'];
                        $suppliersCountry = $result['country'];
                        
                        echo '<tr >'
                        .'<td class="m-5 p-4 " > ' . $suppliersCompaniesName . ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $suppliersVatNumber. ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $suppliersCountry . ' ' . ' </td>'
                        .'<td class="m-5 p-4 text-info bg-dark" >
                        <a href="companiesDetailsPage.php" type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                        }  
                ?>
            </tr> 
        </table>

       
           
            
    </div>
    </main>
 
    <?php require 'includes/footer.php' ?>     
</body>
</html>