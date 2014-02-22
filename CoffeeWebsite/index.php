<?php

require 'Model/ItemModel.php';

$title = 'home';
$myItemModel = new ItemModel();
$item_name_array = array();
$item_name_array =  $myItemModel->GetItemsNameArrayFromTable();
//$seafood_urls = array();
//$seafood_urls =  $myItemModel->GetItemsUrlArrayFromTable();

$formstart = "<form action='' method='post'>";
$col_lg_array = array();

$seafood_urls = array();
$seafood_names = array();
foreach($item_name_array as $item_name){
    $item_type = $myItemModel->GetItemCategoryByName($item_name);
   
    if($item_type ==='seafood'){
        array_push($seafood_urls, $myItemModel->GetItemUrlByName($item_name));
        array_push($seafood_names, $item_name);
    }
}


for($i =0; $i<3; $i++){
    array_push($col_lg_array, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$seafood_urls[$i]' alt='item' height='277'>
        <h4> $seafood_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$seafood_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu = implode(" ", $col_lg_array);
$col_lg_array2 = array();

for($i =3; $i<6; $i++){
    array_push($col_lg_array2, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$seafood_urls[$i]' alt='item' height='277'>
        <h4> $seafood_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$seafood_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu2 = implode(" ", $col_lg_array2);

$col_lg_array3 = array();

for($i =6; $i<9; $i++){
    array_push($col_lg_array3, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$seafood_urls[$i]' alt='item' height='277'>
        <h4> $seafood_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
           <input type='checkbox' name='items[]' value='$seafood_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu3 = implode(" ", $col_lg_array3);

$formend ='<input type="submit" name="formSubmit" value="Submit"></form> ';


include 'Template.php';
?>
