<?php

declare(strict_types=1);

require '../model/ClientsManager.php';

$Clients = new ClientsManager;
$resultsAll = $Clients->getAllUsers();



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
    <header class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white"><h1 class="m-4 p-5 border border-5 border-info rounded-pill text-center text-uppercase fw-bold bg-white display-1">Client Page</h1></p>
        </div>

  <!-- /.container -->
    </header>

   <!-- Page Content -->
   <div class="container">

    <div class="row">

    <div class="c">
    
    <div class="list-group text-center">

    <h3 class="my-5"> Projet de la famille BOT </h3>

    <table style="width:100%" class="table table-striped table-hover">
        <tr class="text-info bg-dark">
          <th class="shadow p-3 ">Firstname</th>
          <th class="shadow p-3 ">Lastname</th>
          <th class="shadow p-3 ">Email</th>
          <th class="shadow p-3 "></th>
          
        </tr>

        <tr class="table shadow rounded  m-5 p-4 bg-danger" >
        
            <?php 
                //echo "Coucou famille Bot". '<br>';
                foreach($resultsAll as $each => $resultsAll ){
                    echo '<tr >'
                    .'<td class="m-5 p-4 " > ' . $resultsAll['first_name'] . ' ' . ' </td>'
                    .'<td class="m-5 p-4 " > ' . $resultsAll['last_name'] . ' ' . ' </td>'
                    .'<td class="m-5 p-4 " >' .$resultsAll['email'] 
                    .'<td class="m-5 p-4 text-info bg-dark" ><button type="button" class="btn btn-outline-info">Details</button> </td>'. '</tr>';
                }
                
             ?>
        </tr>

    </table>

    </div>
    </div>
  <!-- /.col-lg-3 -->

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