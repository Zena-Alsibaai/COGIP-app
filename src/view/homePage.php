<?php

declare(strict_types=1);

require_once '../model/HomeManager.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Home Page - COGIP</title>
    </head>

    <body>

        <header>

        </header>

        <main>
            <div class="container allPage">
                <h1>Welcome to COGIP !</h1>

                <p>Bonjour !</p> <!--Display the user's name -->


                <!-- === Display the last five invoices === -->
                <div class="container invoice_display">
                    <h4>Last Invoice :</h4>

                    <?php
                        $invoice = new HomeManager();
                        $resultInvoice = $invoice->getFiveInvoices();

                        foreach($resultInvoice as $key => $resultInvoice) {
                            echo $resultInvoice["number_of_invoices"] . "</br>";
                        }
                    ?>

                </div>


                <!-- === Display the last five invoices === -->
                <div class="container Clients_display">
                    <h4>Last Clients :</h4>

                    <?php
                        $client = new HomeManager();
                        $resultClient = $client->getFiveClients();

                        foreach($resultClient as $key => $resultClient) {
                            echo $resultClient["first_name"] . '</br>';
                        }
                    ?>

                </div>


                <!-- === Display the last five invoices === -->
                <div class="container Companies_display">
                    <h4>Last Companies :</h4>

                    <?php
                        $companie = new HomeManager();
                        $resultCompanie = $companie->getFiveCompanies();

                        foreach($resultCompanie as $key => $resultCompanie) {
                            echo $resultCompanie["name_companies"] . "</br>";
                        }
                    ?>

                </div>
            </div>
        </main>

        <footer>

        </footer>

    </body>
</html>