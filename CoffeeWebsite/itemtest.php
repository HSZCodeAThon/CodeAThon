<?php

require 'Model/ItemModel.php';

$myItemModel = new ItemModel();
$item_name_array = array();
$itemurl_array = array();
$item_name_array =  $myItemModel->GetItemsNameArrayFromTable();
$array_len = 0;
foreach ($item_name_array as $myname){
    //echo($myname);
    $array_len++;
}

$itemurl_array =  $myItemModel->GetItemsUrlArrayFromTable();
//for($i =0; $i<sizeof($items_array); $i++){
//    array_push($item_name_array, $items_array[$i]);
//    array_push($itemurl_array, $items_array[$i]);
//}

$title = 'itemtest';
$col_lg_array = array();
$formstart = "<form action='' method='post'>";


for($i =0; $i<$array_len; $i++){
    array_push($col_lg_array, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$itemurl_array[$i]' alt='item' height='277'>
        <h4> $item_name_array[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
        </p>
        </fieldset>
        </div>");   
}

$itemsmenu = join('', $col_lg_array);
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
