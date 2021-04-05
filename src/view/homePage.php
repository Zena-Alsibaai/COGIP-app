<?php

declare(strict_types=1);

require_once '../model/HomeManager.php';

$invoice = new HomeManager();
$resultInvoice = $invoice->getFiveInvoices();

$client = new HomeManager();
$resultClient = $client->getFiveClients();

$companie = new HomeManager();
$resultCompanie = $companie->getFiveCompanies();

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

                    <table>
                        <tr>
                        <th><h5>Number Of Invoices</h5></th>
                        <th> | </th>
                        <th><h5>Date Of Invoices</h5></th>
                        <th> | </th>
                        <th><h5>ID Of Companies</h5></th>
                        </tr>
                        <?php
                            foreach($resultInvoice as $key => $resultInvoice) {
                                echo '<tr>' .
                                    '<td>' . $resultInvoice["number_of_invoices"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultInvoice["date"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultInvoice["name_companies"] . '</td>' .
                                '</tr>';
                            }
                        ?>
                    </table>
                </div>

                </br>

                <!-- === Display the last five clients === -->
                <div class="container Clients_display">
                    <h4>Last Clients :</h4>

                    <table>
                        <tr>
                            <th><h5>First Name</h5></th>
                            <th> | </th>
                            <th><h5>Last Name</h5></th>
                            <th> | </th>
                            <th><h5>Email</h5></th>
                            <th> | </th>
                            <th><h5>ID Of Companies</h5></th>
                        </tr>
                        <?php
                            foreach($resultClient as $key => $resultClient) {
                                echo '<tr>' .
                                    '<td>' . $resultClient["first_name"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultClient["last_name"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultClient["email"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultClient["name_companies"] . '</td>' .
                                '</tr>';
                            }
                        ?>
                    </table>

                </div>
                
                </br>

                <!-- === Display the last five companies === -->
                <div class="container Companies_display">
                    <h4>Last Companies :</h4>

                    <table>
                        <tr>
                            <th><h5>Name Of Companies</h5></th>
                            <th> | </th>
                            <th><h5>Country</h5></th>
                            <th> | </th>
                            <th><h5>TVA Numer</h5></th>
                            <th> | </th>
                            <th><h5>Types</h5></th>
                        </tr>
                        <?php
                            foreach($resultCompanie as $key => $resultCompanie) {
                                echo '<tr>' .
                                    '<td>' . $resultCompanie["name_companies"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultCompanie["country"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultCompanie["vat_number"] . '</td>' .
                                    '<td> | </td>' .
                                    '<td>' . $resultCompanie["types_of"] . '</td>' .
                                '</tr>';
                            }
                        ?>
                    </table>

                </div>

                </br>
                
            </div>
        </main>

        <footer>

        </footer>

    </body>
</html>