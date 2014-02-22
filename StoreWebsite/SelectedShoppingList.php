<?php
require ('Controller/StoreController.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$storeController = new StoreController();
$shoppinglist = array();
$shoppinglist = $storeController->GetShoppingListentity();
$result = "";
$i = 0;
foreach ($shoppinglist as $item)
{
    $i++;
    $result = $result.
            "<table>"."<tr>".
            "<th>$i</th>".
            "<th>$item</th>"
            . "</tr>"
            . "</table>";
}
$content ="";
$content = $resutl;
include "Template.php";
?>