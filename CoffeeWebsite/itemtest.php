<?php

require './Controller/StoreController.php';
$storeController = new StoreController();
//$content ='<form action="" method="post">
//                 <fieldset>
//                  <img src="Images/bestcart/items/apple.jpg" class="imgLeft" />
//                  <input type="checkbox" name="items[]" value="Images/bestcart/items/apple.jpg" />apple<br />
//                </fieldset>
//                <fieldset>
//                  <img src="Images/bestcart/items/orange.jpg" class="imgLeft" />
//                  <input type="checkbox" name="items[]" value="orange" />orange<br />
//                </fieldset>
//                <fieldset>
//                  <img src="Images/bestcart/items/grape.jpg" class="imgLeft" />
//                  <input type="checkbox" name="items[]" value="grape" />grape<br />
//                </fieldset>
//                <input type="submit" name="formSubmit" value="Submit" />
// 
//</form>';

$item_name_array =array();
array_push($item_name_array, 'salmon');
array_push($item_name_array, 'tuna');
array_push($item_name_array, 'swardfish');

$itemurl_array = array();
array_push($itemurl_array, "themes/assets/images/salmon.jpg");
array_push($itemurl_array, "themes/assets/images/tuna.jpg");
array_push($itemurl_array, "themes/assets/images/swardfish.jpg");
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
