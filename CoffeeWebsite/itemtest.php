<?php

require './Controller/StoreController.php';
require './Model/ItemModel.php';
$storeController = new StoreController();
$myItemModel = new ItemModel();
//$items_array = $myItemModel->GetItemsNameArrayFromTable();
$item_name_array =  $myItemModel->GetItemsNameArrayFromTable();
$itemurl_array =  $myItemModel->GetItemsUrlArrayFromTable();
for($i =0; $i<sizeof($items_array); $i++){
    array_push($item_name_array, $items_array[$i]);
    array_push($itemurl_array, $items_array[$i]);
}
//array_push($item_name_array, 'salmon');
//array_push($item_name_array, 'tuna');
//array_push($item_name_array, 'swardfish');


//array_push($itemurl_array, "themes/assets/images/salmon.jpg");
//array_push($itemurl_array, "themes/assets/images/tuna.jpg");
//array_push($itemurl_array, "themes/assets/images/swardfish.jpg");
$title = 'itemtest';
$col_lg_array = array();
$formstart = "<form action='' method='post'>";
//foreach ($item_name_array as $itemname){

for($i =0; $i<sizeof($item_name_array); $i++){
    array_push($col_lg_array, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$itemurl_array[$i]' alt='item' height='277'>
        <h4> $item_name_array[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart &raquo;
            <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
        </p>
        </fieldset>
        </div>");   
}

$col_lgs = join('', $col_lg_array);
$formend ='<input type="submit" name="formSubmit" value="Submit"></form> ';

   if(isset($_POST['items'])){
            
            $itemnamelist = $_POST['items'];
            if(empty($itemnamelist))
            {
              echo("You didn't select any buildings.");
            }
            else
            {
//                foreach ($itemnamelist as $aname){
//                    echo($aname);
//                }
                $result = $storeController->CreateShoppingList($itemnamelist);
                $content = $content."$result";

            }
        }


include 'Template.php';
?>
