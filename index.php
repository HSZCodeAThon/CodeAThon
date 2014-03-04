<?php

require 'Model/ItemModel.php';
require 'Controller/StoreController.php';
$storeController = new StoreController();
$myItemModel = new ItemModel();
$item_name_array = array();
$itemurl_array = array();
$item_type_array = array();
$item_name_array =  $myItemModel->GetItemsNameArrayFromTable();
$item_type_array = $myItemModel->GetItemsCategoryArrayFromTable();
$array_len = 0;
foreach ($item_type_array as $mytype){
   // echo($mytype);
    $array_len++;
}

$itemurl_array =  $myItemModel->GetItemsUrlArrayFromTable();

$title = 'home';

$formstart = "<form action='' method='post'>";
$col_lg_array = array();

for($i =0; $i<3; $i++){
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

$itemsmenu = implode(" ", $col_lg_array);
$col_lg_array2 = array();

for($i =3; $i<6; $i++){
    array_push($col_lg_array2, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$itemurl_array[$i]' alt='item' height='277'>
        <h4> $item_name_array[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu2 = implode(" ", $col_lg_array2);

$col_lg_array3 = array();

for($i =6; $i<9; $i++){
    array_push($col_lg_array3, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$itemurl_array[$i]' alt='item' height='277'>
        <h4> $item_name_array[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu3 = implode(" ", $col_lg_array3);

$formend ='<input type="submit" style = "margin-left: 50%"name="formSubmit" value="Submit"></form> ';
$result = array();
$pricelistofstores = array();
$selectedshoppinglist = "";
$onestoreCost = array();
// echo "in index";
if(isset($_POST['items'])){
           // echo "itemtest.php";
            $pathlist = $_POST['items'];
           // echo $pathlist[0];
            if(empty($pathlist))
            {
              echo("You didn't select any buildings.");
            }
            else
            {
                foreach ($pathlist as $aname){
                 //   echo($aname);
                }
                $result = $storeController->CreateShoppingList($pathlist); //$result is the namelist of items
                $pricelistofstores = $storeController->GetPriceListByNameList($result); // test here;
                $onestoreCost = $storeController->GetOptimalCostFromOneStore($pricelistofstores); // test here
                foreach ($result as $name)
                {
                    $selectedshoppinglist = $selectedshoppinglist."$name"."<br>";
                }
                foreach ($onestoreCost as $key => $value)
                {
                    $selectedshoppinglist = $selectedshoppinglist."You can buy all these from $key with the loweset price $value dollars"."<br>";
                }
                $multiOptimal = array();
                $multiOptimal = $storeController->GetChoiceWithOptimalCostFromMultiStores($result); // test here
                $globalMinimumCost = $storeController->GetOptimalCostFromMultiChoice($multiOptimal);
                $store = array("bilo","foodlion","publix");
                 $i = 0;
                $store = array("bilo","foodlion","publix");
                $selectedshoppinglist = $selectedshoppinglist."If you want to go to multiple stores, the following shopping plan can get you loweset cost<br>";
                foreach ($multiOptimal as $eachStore)
                {
                    $selectedshoppinglist = $selectedshoppinglist."<br>".$store[$i++]."{";
                    foreach($eachStore as $key => $value)
                    {
                        $selectedshoppinglist = $selectedshoppinglist.$key.",";
                    }
                    $selectedshoppinglist = $selectedshoppinglist. "}";
                }
                $selectedshoppinglist = $selectedshoppinglist."<br>at cost: ".$globalMinimumCost." dollars.";
                //
                //
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

include 'Template.php';
?>
