<?php

declare(strict_types=1);

require_once '../model/DeleteManager.php';
require_once '../model/HomeManager.php';

$contact = new HomeManager();
$allContact = $contact->getAllContact();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Delete Contacts Page - COGIP</title>
    </head>

    <body>

        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation">Delete Contact Page</h1>
            </div>
        </header>

        <main>
            <!-- ==== Display the last five Contacts ==== -->
            <div class="row list-group text-center">
                <h3 class="my-5"> All Contacts : </h3>
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
                        foreach($allContact as $each => $allContact ){

                            echo '<tr >'
                            .'<td class="m-5 p-4 " > ' . $allContact["first_name"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allContact["last_name"] . ' ' . ' </td>'
                            .'<td class="m-5 p-4 " > ' . $allContact["email"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 " > ' . $allContact["name_companies"] . ' ' . ' </td>' 
                            .'<td class="m-5 p-4 text-info bg-dark" >
                                <a href="../model/DeleteManager.php?mode=deleteContact&id='. $allContact["id_client"] .'">Delete</a> </td>'. '</tr>';
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