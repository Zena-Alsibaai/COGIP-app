<?php
declare(strict_types=1);

require '../model/ContactManager.php';
$contacts = new ClientsManager;
$contactAll = $contacts->getDetailContacts($_GET["id"]);

?>


<!DOCTYPE html>
<html lang="en">

    <?php require "./includes/navbar.php" ?>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Contact Details Page</title>
    </head>

    <body>
        <!-- Header-->
        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation">Contact Details</h1>
            </div>
        </header>

       <!-- Page Content -->
        <main class="container">
            <div class="row list-group text-center">
                
                <?php foreach($contactAll as $index => $contact):
                             
                             $firstname = $contact['first_name'];
                             $lastname = $contact['last_name'];
                             $email = $contact['email'];
                ?>
                
                <h3 class="my-5"> Projet de la famille BOT </h3>

                <p class=" ">Contact Name: <?php echo $firstname ?> <?php echo $lastname ?></p>
                <p class=" ">Company: <?php echo $lastname ?>  </p>
                <p class=" ">Email: <?php echo $email ?> </p>

                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">Invoice number</th>
                        <th class="shadow p-3 ">date</th>

                    </tr>

                    <tr >
                    
                        <td class="shadow p-3 "> <?php echo $firstname ?>  </td>
                        <td class="shadow p-3 "> <?php echo $lastname ?> </td>

                    </tr>    
                </table> 

                <?php endforeach; ?>       
            </div><!-- /.row -->
        </main> <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>