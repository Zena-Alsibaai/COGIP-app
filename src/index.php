<?php
    require_once './model/Manager.php';
    require_once './model/User.php';
    
    
    try {
        
        $results = $db->prepare("SELECT first_name FROM clients");
        $results->execute();
    } catch(Exception $e) {
        echo $e->getMessage();
        exit;
    } 
    $customerNumber = $results->fetchAll(PDO::FETCH_ASSOC);
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
             foreach ($customerNumber as $key => $customer) {
                //var_dump($product['productCode']);
                echo '<li>'. $customer['first_name'].'</li>';
            }
        ?>
    </body>
</html>