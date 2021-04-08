<?php
declare(strict_types=1);

//require '../model/ClientsManager.php';

// $Clients = new ClientsManager;
// $resultsAll = $Clients->getAllUsers();

?>


<!DOCTYPE html>
<html lang="en">

    <?php require "./includes/navbar.php" ?>
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
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-1">Name Page</h1>
            </div>
        </header>

       <!-- Page Content -->
        <main class="container">
            <div class="row list-group text-center">
    
                <h3 class="my-5"> Projet de la famille BOT </h3>
                <?php 
                    // require '../model/ContactManager.php';
                    // $Client = new ClientsManager;
                    // $resultsAll = $Client->getDetailContacts();
                ?>
                <?php
                if(isset($_GET['idIndex'])){	
                    // foreach($Contact->getDetailContacts() as $detail_contacts){
                    //     if($_POST['more']==$detail_contacts['id_client']){
                    //         echo $contact['first_name'];
                    //         echo $contact['last_name'];
                    //         echo $contact['email'];
                    //     }
                    // }

                    $idClient = $_GET['idIndex'];
                    echo $idClient;

                    require '../model/ContactManager.php';
                    $Client = new ClientsManager;
                    $resultsAll = $Client->getDetailContacts();

                    foreach($resultsAll as $indexContact => $contactDetails ){

                        $firstnameDetails = $contactDetails['first_name'];
                        $lastnameDetails = $contactDetails['last_name'];
                        $emailDetails = $contactDetails['email'];
                        $idClientDetails = $contactDetails['id_client'];
                        $indexSingleDetais = $indexContact;

                        echo $firstnameDetails;
                    }


                }// end of if isset
                
                ?>
                      
            </div><!-- /.row -->
        </main> <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>