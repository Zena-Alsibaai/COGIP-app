<?php

declare(strict_types=1);

require_once '../model/CompaniesManager.php';
// calling the functions and classe in CompaniesManager file 
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
            <h1 class=" m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation"> Companies Directory</h1>
            
        </div>
    </header>
    <!-- Page Content -->
    <main class="container">
    
    <div class="row list-group text-center">

        <h2 class="my-5">Clients :</h2>

    <!-- ====== Display the first table of companies "types clients" ======= -->
        <table style="width:100%" class="table table-striped table-hover">
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name : </th>
                <th class="shadow p-3 ">TVA : </th>
                <th class="shadow p-3 ">Country : </th>
                <th class="shadow p-3 "></th>
            </tr>
            <!-- ======Loop to store the information of each item  in variables that we will calling after====== -->
            <?php foreach($resultsAll as  $resultsAll):
                        $companiesName = $resultsAll['name_companies'];
                        $companiesId= $resultsAll['id_companies'];
                        $vatNumber= $resultsAll['vat_number'];
                        $country = $resultsAll['country'];
            ?>
            <!-- ====== Calling the variables for display the values in the table cells for each item ====== -->
                <tr >
                    <td class=" m-5 p-4"><?php echo $companiesName; ?>
                    </td>
                    <td class=" m-5 p-4"><?php echo $vatNumber; ?>
                    </td>
                    <td class=" m-5 p-4"><?php echo $country; ?>
                    </td>
                    <td class="m-5 p-4 text-info bg-dark" >
                        <a href="companiesDetailsPage.php?id=<?php echo $companiesId?>" type="button" class="btn btn-outline-info">Details</a> 
                         <!-- // dans l'URL on ajoute?id= pour qu'on puisse aller chercher les info de chaque id   -->
                    </td>      
                </tr>

            <?php endforeach; ?> 
           

        </table>

        <!-- ====== Display the second table of companies "types suppliers" ======= -->

        <table style="width:100%" class="table table-striped table-hover">
        
            <h2 class="my-5">Suppliers :</h2>
        
           <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name : </th>
                <th class="shadow p-3 ">TVA : </th>
                <th class="shadow p-3 ">Country : </th>
                <th class="shadow p-3 "></th>
            </tr>
             <!-- ======Loop to store the information of each item  in variables that we will calling after====== -->
                <?php foreach($resultsSuppliers as $result):
                            $suppliersCompaniesName = $result['name_companies'];
                            $suppliersVatNumber= $result['vat_number'];
                            $suppliersCountry = $result['country'];
                            $suppliersId = $result['id_companies'];
                ?>
            <tr >
            <!-- ====== Calling the variables for display the values in the table cells for each item ====== -->
                <td class=" m-5 p-4"><?php echo $suppliersCompaniesName; ?></td>
                <td class=" m-5 p-4"><?php echo $suppliersVatNumber; ?></td>
                <td class=" m-5 p-4"><?php echo $suppliersCountry; ?></td>
                <td class="m-5 p-4 text-info bg-dark" >
                    <a href="companiesDetailsPage.php?id=<?php echo $suppliersId?>" type="button" class="btn btn-outline-info">Details</a> 
                </td>
            </tr>
                        
        <?php endforeach; ?>          
            
        </table>
            
        </div>
    </main>
  <!-- Footer -->
    <?php require 'includes/footer.php' ?>  

       <!-- Bootstrap core JavaScript -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
</body>
</html>