<?php

declare(strict_types=1);

require_once '../model/DeleteManager.php';
require_once '../model/HomeManager.php';

$invoice = new HomeManager();
$allinvoice = $invoice->getAllInvoices();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Delete Invoices Page - COGIP</title>
    </head>

    <body>

        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4">Delete Invoices Page</h1>
            </div>
        </header>

        <main>
            <!-- ==== Display the last five Contacts ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> All Contacts : </h3>
                <table style="width:100%" class="table table-striped table-hover">
                <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">Number Of Invoices</th>
                        <th class="shadow p-3 ">Date Of Invoices</th>
                        <th class="shadow p-3 ">Names Of Companies</th>
                        <th class="shadow p-3 "></th>

                    </tr>

                    <tr >

                    <?php 
                        foreach($allinvoice as $each => $allinvoice ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $allinvoice["number_of_invoices"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allinvoice["date"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allinvoice["name_companies"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                            <a href="../model/DeleteManager.php?mode=deleteContact&id='. $allinvoice["id_client"] .'">Delete</a> </td>'. '</tr>';
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