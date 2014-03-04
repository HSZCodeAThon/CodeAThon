<?php
//session_id(111);
//ob_start();
//@session_start();
//echo session_id();
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
        <p><a class='btn btn-default' href='#' role='button'>Add to cart
            <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
        </p>
        </fieldset>
        </div>");
}

$col_lgs = join('', $col_lg_array);
$formend ='<input type="submit" name="formSubmit" value="Submit"></form> ';
$content = "";
echo "wtf";
$result = array();
if(isset($_POST['items'])){
            echo "itemtest.php";
            $pathlist = $_POST['items'];
            echo $pathlist[0];
            if(empty($pathlist))
            {
              echo("You didn't select any buildings.");
            }
            else
            {
//                foreach ($pathlist as $aname){
//                    echo($aname);
//                }
                $result = $storeController->CreateShoppingList($pathlist);
               // echo $result."good";
//                $_SESSION['shoppinglist'] = "in itemtest.php";
//                echo $_SESSION['shoppinglist'];
                foreach ($result as $value)
                {
                    $content = "<table><tr>"."<th>$value</th>"
                            . "</tr></table>";
                }
            }
        }

//ob_flush();
include 'Template.php';
?>
