<?php
//session_id(111);
//ob_start();
//@session_start();
//echo session_id();
require ('Controller/StoreController.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$storeController = new StoreController();
$formstart = ""; 
$col_lgs = "";
$formend ="";
$content = "ddd";
//if(isset($_SESSION['shoppinglist']))
//{
//    echo $_SESSION['shoppinglist'];
//    foreach($_SESSION['shoppinglist'] as $value)
//    {
//        echo " "."good";
//    }
//} 
//$content  = $storeController->DisplayShoppingList();
//$content = "display in selectedshoppinglist.php";
//ob_flush();
include "Template.php";
?>