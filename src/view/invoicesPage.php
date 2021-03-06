<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>COGIP: Invoices</title>
    </head>
    <body>
         <?php include('./includes/navbar.php') ?> 
        <!-- Header-->
        <header class="py-5 bg-dark">
            <div class="container">
                <h1 class=" animation m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4  ">Invoices</h1>
            </div>
        </header>
       <!-- Page Content -->
        <main class="container">
            <div class="row list-group text-center">
                <h3 class="my-5"> Projet de la famille BOT </h3>
                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                      <th class="shadow p-3 ">Invoice number</th>
                      <th class="shadow p-3 ">Dates</th>
                      <th class="shadow p-3 ">Companies</th>
                      <th class="shadow p-3 ">Type</th>
                      <th class="shadow p-3 "></th>
                    </tr>
                    <tr >
                     <?php 
                     include('./includes/dataTableInvoicesPage.php')
                     ?>
                    </tr>    
                </table>       
            </div><!-- /.row -->
        </main> <!-- /.container -->
        <!-- Bootstrap core JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>



        

                

    


                            
                            

                            

                             






        

       






