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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- Header-->
        <header class="py-5 bg-dark">
        
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-1">Details Invoice</h1>
            </div>
        </header>

       <!-- Page Content -->
        <main class="container">
            <div class="row list-group text-center">

                
    
                <h3 class="my-5"> Projet de la famille BOT </h3>
                <h1>INVOICE: 
                    <?php 
                       echo $resultsAll[0];


                    ?>
                </h1>
            </div><!-- /.row -->
        </main> <!-- /.container -->

       

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>