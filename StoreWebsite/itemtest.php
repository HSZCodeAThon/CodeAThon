<?php
require './Controller/StoreController.php';
$storeController = new StoreController();
    $content ='<form action="" method="post">
                 <fieldset>
                  <img src="Images/bestcart/items/apple.jpg" class="imgLeft" />
                  <input type="checkbox" name="items[]" value="Images/bestcart/items/apple.jpg" />apple<br />
                </fieldset>
                <fieldset>
                  <img src="Images/bestcart/items/orange.jpg" class="imgLeft" />
                  <input type="checkbox" name="items[]" value="orange" />orange<br />
                </fieldset>
                <fieldset>
                  <img src="Images/bestcart/items/grape.jpg" class="imgLeft" />
                  <input type="checkbox" name="items[]" value="grape" />grape<br />
                </fieldset>
                <input type="submit" name="formSubmit" value="Submit" />
 
</form>';

if(isset($_POST['items'])){
$itemnamelist = $_POST['items'];
  if(empty($itemnamelist))
  {
    echo("You didn't select any buildings.");
  }
  else
  {
      $result = $storeController->CreateShoppingList($itemnamelist);
      $content = $content."$result";
//    $N = count($aDoor);
// 
//    echo("You selected $N door(s): ");
//    for($i=0; $i < $N; $i++)
//    {
//      echo($aDoor[$i] . " ");
//    }
  }
}
include './Template.php';
?>