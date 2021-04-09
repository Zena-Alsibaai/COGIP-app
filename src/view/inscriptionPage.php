<?php

declare(strict_types=1);

require_once '../model/InscriptionManager.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>Inscription - COGIP</title>
    </head>

    <body>
        <?php
            require 'includes/navbar.php'
        ?>

        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4 animation">Sign Up</h1>
            </div>
        </header>

        <main class="container bg-dark">
            <div class="container py-5 bg-dark text-center">
                <form action="homePage.php" method="post">
                    <input type="text" name="name" placeholder="Name"/>
                    </br>
                    <input type="password" name="pwd" placeholder="Password"/>
                    </br>
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password"/>
                    </br>
                    <input type="submit" name="submit" value="Sign Up"/>
                </form>
            </div>
        </main>
    </body>

    <?php require 'includes/footer.php' ?>
</html>