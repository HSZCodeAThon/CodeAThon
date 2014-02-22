<?php

require 'Controller/StoreController.php';
$storeController = new StoreController();

if(isset($_POST['distance']))
{
    //Fill page with stores of the selected type
    $storeTables = $storeController->CreateStoreTable($_POST['distance']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $storeTables = $storeController->CreateStoreTable('%');
}

//Output page data
$title = 'Stores available';
$content = $storeController->CreateStoreDropdownList(). $storeTables;

include 'Template.php';
?>
