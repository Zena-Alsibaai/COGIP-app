<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title> COGIP: Invoice Details</title>
</head>
<body>
    <?php require 'includes/navbar.php' ?>
     <!-- Header-->
     <header class="py-5 bg-dark">
        <div class="container">
            <h1 class="m-4 p-5 border border-5 border-warning rounded-pill text-center  bg-white display-4 text-uppercase fw-bold animation ">Details Invoice</h1>
        </div>
    </header>
    <!-- Page Content -->
    <main class="container">
        <h2 class='text-center'>Invoices : 
        <?php 
         include('includes/invoicesNumber.php')
        ?>
        </h2>
            <h5>Company linked to the invoice</h5>
            <table style="width:100%" class="table table-striped table-hover">
            <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name </th>
                <th class="shadow p-3 ">TVA </th>
                <th class="shadow p-3 ">Company type</th>
            </tr>
            <tr>
            <?php
               include('includes/dataTableDetailInvoices-companies.php');
            ?>
            </tr>
            </table>
            <h5>Contact person</h5>
            <table style="width:100%" class="table table-striped table-hover">
            <tr class="text-warning bg-dark">
                <th class="shadow p-3 ">Name </th>
                <th class="shadow p-3 ">Email</th>
                <th class="shadow p-3 ">Phone</th>
            </tr>
            <tr>
            <?php
              include('includes/dataTableInvoicesContact.php');
            ?>
            </tr>
            </table>
    </main>
    <?php require 'includes/footer.php' ?>     
</body>
</html>
        
                
            
                
            





                


 
            



                

