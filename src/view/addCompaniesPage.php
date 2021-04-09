<?php

declare(strict_types=1);

require_once '../model/AddCompaniesManager.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Inscription - COGIP</title>
    </head>

    <body>
        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4">New Contact</h1>
            </div>
        </header>

        <main class="container bg-dark">
            <div class="container py-5 bg-dark text-center">
                <form action="" method="post">
                    <h2 class="text-light">Name</h2>
                    <input type="text" name="name_companies" placeholder="ex : "/>
                    </br>
                    </br>
                    <h2 class="text-light">Country</h2>
                    <input type="text" name="country" placeholder="Password"/>
                    </br>
                    </br>
                    <h2 class="text-light">VAT Number</h2>
                    <input type="email" name="vat_number" placeholder="Repeat Password"/>
                    </br>
                    </br>
                    <h2 class="text-light">Type Of Company</h2>
                    <select name="companies">
                        <option value="1">Suppliers</option>
                        <option value="2">Clients</option>
                    </select>
                    </br>
                    </br>
                    <input type="submit" name="submit" value="Add Contact"/>
                </form>
            </div>
        </main>
    </body>

    <?php require 'includes/footer.php' ?>
</html>