<?php

declare(strict_types=1);

require_once '../model/AddInvoiceManager.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>Add Ivoices - COGIP</title>
    </head>

    <body>
        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation">New Invoice</h1>
            </div>
        </header>

        <main class="container bg-dark">

            <!-- Form Invoice -->
            <div class="container py-5 bg-dark text-center">
                <form action="" method="post">
                    <h2 class="text-light">Number</h2>
                    <input type="text" name="number_of_invoices" placeholder="ex : F12345678-123 "/>
                    </br>
                    </br>
                    <h2 class="text-light">Date</h2>
                    <input type="text" name="date" placeholder="ex : 2019-04-04"/>
                    </br>
                    </br>
                    <h2 class="text-light">Company</h2>
                    <select name="id_companies">
                        <option value="1">Raviga</option>
                        <option value="2">Dunder Mifflin</option>
                        <option value="5">Pierre Cailloux</option>
                        <option value="6">Belgalol</option>
                        <option value="7">Jouets Jean-Michel</option>
                        <option value="8">Mutiny</option>
                        <option value="9">Hooli</option>
                        <option value="10">Phoque Off</option>
                        <option value="11">Pied Peper</option>
                        <option value="12">Best Team</option>
                    </select>
                    </br>
                    </br>
                    <h2 class="text-light">Contact</h2>
                    <select name="id_clients">
                        <option value="1">Peter Gregory</option>
                        <option value="2">Cameron Howe</option>
                        <option value="3">Gavin Pelson</option>
                        <option value="4">Jian Yang</option>
                        <option value="5">Bertam Gilfoyle</option>
                        <option value="6">Rekha Bot</option>
                        <option value="7">Zena Bot</option>
                        <option value="8">Weap Bot</option>
                        <option value="9">Richard Bot</option>
                        <option value="11">Samuel Letocart</option>
                    </select>
                    </br>
                    </br>
                    <input type="submit" name="submit" value="Add Invoices"/>
                </form>
            </div>
        </main>
    </body>

    <?php require 'includes/footer.php' ?>
</html>