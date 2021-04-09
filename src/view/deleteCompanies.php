<?php

declare(strict_types=1);

require_once '../model/DeleteManager.php';
require_once '../model/HomeManager.php';

$companies = new HomeManager();
$allCompanies = $companies->getAllCompanies();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Delete Companies Page - COGIP</title>
    </head>

    <body>

        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation">Delete Company Page</h1>
            </div>
        </header>

        <main>
            <!-- ==== Display the last five Contacts ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> All Contacts : </h3>
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
                        foreach($allCompanies as $each => $allCompanies ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $allCompanies["name_companies"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allCompanies["country"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allCompanies["vat_number"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 " > ' . $allCompanies["types_of"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                            <a href="../model/DeleteManager.php?mode=deleteContact&id='. $allCompanies["id_companies"] .'">Delete</a> </td>'. '</tr>';
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