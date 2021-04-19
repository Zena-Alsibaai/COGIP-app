<?php 
    require_once '../model/InvoicesManager.php';
    $invoices = new InvoicesManager();
    $resultsAll = $invoices->getAllUsers();
                foreach($resultsAll as $each => $resultsAll ){
                    echo '<tr >'
                        .'<td name="test" class="m-5 p-4 " > ' . $resultsAll['number_of_invoices']. ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $resultsAll['date']. ' ' . ' </td>'
                        .'<td class="m-5 p-4 " > ' . $resultsAll['name_companies']. ' ' . ' </td>'
                        .'<td class="m-5 p-4 " >' .$resultsAll['types_of']
                         .'<td class="m-5 p-4 text-info bg-dark" >
                             <a href="./detailInvoices.php?id='. $resultsAll['id_invoices'] .'" method="post" name="details" type="button" class="btn btn-outline-info">Details</a> </td>'. '</tr>';
                        }  
 ?>