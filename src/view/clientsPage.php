<?php

declare(strict_types=1);

require '../model/ClientsManager.php';

$Clients = new ClientsManager;
$resultsAll = $Clients->getAllUsers();

// foreach($resultsAll as $each => $resultsAll ){
    
//     $firstname = $resultsAll['first_name'] . ' ' . '<br> ';
//     echo $firstname;
    
// }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</nav> -->

   <!-- Page Content -->
   <div class="container">

<div class="row">

  <div class="col-lg-3">
    <h1 class="my-4">Client Page</h1>
    <div class="list-group text-center">

    <h3> Projet de la famille BOT </h3>

    <table style="width:100%">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>

        <tr>
            <?php 
                echo "Coucou famille Bot". '<br>';
                foreach($resultsAll as $each => $resultsAll ){
                    echo '<tr> <td> ' . $resultsAll['first_name'] . ' ' . ' </td></tr>';
                }
                
             ?>
        </tr>

        <tr>
            <?php 
                echo "Coucou famille Bot". '<br>';
                foreach($resultsAll as $each => $resultsAll ){
                    echo '<tr> <td> ' . $resultsAll['last_name'] . ' ' . ' </td></tr>';
                }
                
             ?>
        </tr>
            
            
        
          
        
    </table>

    <ul>
   
    </ul>

       

    </div>
  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">


    <div class="card card-outline-secondary my-4">
      <div class="card-header " id="indivInvoice">
        Product Reviews
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        
        <a href="#" class="btn btn-success">Details</a>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
  </div>

  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>