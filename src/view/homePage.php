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

        <?php
            require 'includes/navbar.php'
        ?>

        <main>
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-1">Home Page</h1>
            </div>

            <h2 class="text-center">Welcome to COGIP !</h2>

            <!-- ==== Display the last five invoices ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> Last Invoices : </h3>
                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">Number Of Invoices</th>
                        <th class="shadow p-3 ">Date Of Invoices</th>
                        <th class="shadow p-3 ">Names Of Companies</th>
                        <th class="shadow p-3 "></th>

                    </tr>

                    <tr >

                        <?php 
                        foreach($resultInvoice as $each => $resultInvoice ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $resultInvoice["number_of_invoices"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultInvoice["date"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultInvoice["name_companies"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                                <a href="./ clientsDetailsPage.php" type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                        }  
                        ?>
                    </tr>    
                </table>       
            </div><!-- /.row -->

            <!-- ==== Display the last five clients ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> Last Clients : </h3>
                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">First Name</th>
                        <th class="shadow p-3 ">Last Name</th>
                        <th class="shadow p-3 ">Email</th>
                        <th class="shadow p-3 ">Names Of Companies</th>
                        <th class="shadow p-3 "></th>

                    </tr>

                    <tr >

                        <?php 
                        foreach($resultClient as $each => $resultClient ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $resultClient["first_name"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultClient["last_name"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultClient["email"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 " > ' . $resultClient["name_companies"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                                <a href="./ clientsDetailsPage.php" type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                        }  
                        ?>
                    </tr>    
                </table>       
            </div><!-- /.row -->

            <!-- ==== Display the last five companies ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> Last Companies : </h3>
                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">Name Of Companies</th>
                        <th class="shadow p-3 ">Country</th>
                        <th class="shadow p-3 ">TVA Numer</th>
                        <th class="shadow p-3 ">Types</th>
                        <th class="shadow p-3 "></th>

                    </tr>

                    <tr >

                        <?php 
                        foreach($resultCompanie as $each => $resultCompanie ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $resultCompanie["name_companies"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultCompanie["country"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $resultCompanie["vat_number"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 " > ' . $resultCompanie["types_of"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                                <a href="./ clientsDetailsPage.php" type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                        }  
                        ?>
                    </tr>    
                </table>       
            </div><!-- /.row -->
        </main>

        <?php
            require 'includes/footer.php'
        ?>

    </body>
</html>