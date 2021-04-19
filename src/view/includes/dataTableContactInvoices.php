<?php 
    require_once '../model/InvoicesManager.php';
    $invoices = new InvoicesManager();
    $detailClient = $invoices->getCompaniesContactPersons($_GET["id"]);
    
    foreach( $detailClient as $key => $detail){
        echo '<tr>' . '<td class="m-5 p-4 " > ' . $detail['first_name'] . ' ' . $detail['last_name'] . '<td class="m-5 p-4 " > ' .  $detail['email'] . ' </td>'. '<td class="m-5 p-4 " > ' .  $detail['phone_number'] . ' </td>';
    }

?>