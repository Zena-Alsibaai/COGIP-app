<?php 
        require_once '../model/InvoicesManager.php';
        $invoices = new InvoicesManager();
        $detailInvoices = $invoices->detailsInvoices($_GET["id"]); 
        //foreach number invoices
            foreach( $detailInvoices as  $key => $result){
                    $numberInvoices = $result['number_of_invoices'];
                    echo '<span>'. $numberInvoices.'</br>' . '</span>';
                }
            ?>