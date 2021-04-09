<?php 
    require_once '../model/InvoicesManager.php';
    $invoices = new InvoicesManager();
    $detailInvoices = $invoices->detailsInvoices($_GET["id"]); 
    
    //foreach detail invoices
    foreach($detailInvoices as $key => $detail){
        echo '<tr>' . '<td class="m-5 p-4 " > ' . $detail['name_companies'] . ' ' . ' </td>'. '<td class="m-5 p-4 " > ' .  $detail['vat_number'] . ' </td>'. '<td class="m-5 p-4 " > ' .  $detail['types_of'] . ' </td>';
    }
?>