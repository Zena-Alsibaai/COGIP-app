<?php

declare(strict_types=1);

require '../model/ContactManager.php';
$Contacts = new ClientsManager;
$resultsAll = $Contacts->getAllContacts();

// $count = count($resultsAll);
// echo $count;

/*
for($i=0;$i<$count;$i++){ 
        $firstname['first_name'] = $resultsAll;
        $lastname = $resultsAll['last_name'];
        $email = $resultsAll['email']; 
        //var_dump( $firstname);
        
    }; */

// green = success 
// red = danger 
// orange = warning 
// blue = primary 
// light blue = info 

?>
<!DOCTYPE html>
<html lang="en">

    <!-- -->
    
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- Header-->
        <?php require "./includes/navbar.php" ?>
        <header class="py-5 bg-dark">
            
            <div class="container">
                
                <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center text-uppercase fw-bold bg-white display-4">Contacts Page</h1>
            </div>
        </header>

    <!-- Page Content -->
        <main class="container">
            <div class="row list-group text-center">
                <h3 class="my-5"> Projet de la famille BOT </h3>
                <table style="width:100%" class="table table-striped table-hover">
                    <tr class="text-warning bg-dark">
                        <th class="shadow p-3 ">Column name</th>
                        <th class="shadow p-3 ">Column name</th>
                        <th class="shadow p-3 ">Column name</th>
                        <th class="shadow p-3 "></th>

                    </tr>

                    <tr >
                        <?php 
                            
                            foreach($resultsAll as $index => $contact ){

                                $firstname = $contact['first_name'];
                                $lastname = $contact['last_name'];
                                $email = $contact['email'];
                    
                                echo '<tr >'
                                .'<td class="m-5 p-4 " > '. $index .' - ' . $firstname . ' ' . ' </td>'
                                .'<td class="m-5 p-4 " > ' . $lastname . ' ' . ' </td>'
                                .'<td class="m-5 p-4 " >' .$email 
                                .'<td class="m-5 p-4 text-info bg-dark" >
                                    <a href="./clientsDetailsPage.php" type="button" class="btn btn-outline-info" name="details" value="<?php echo $index?>">Details</button> </td>'. '</tr>';
                    
                            }
                        ?>
                    </tr>    
                </table>  
     
            </div><!-- /.row -->
        </main> <!-- /.container -->


        <!-- Footer -->
        <?php require "./includes/footer.php" ?>

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>