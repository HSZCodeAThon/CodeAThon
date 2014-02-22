<?php

require 'Model/ItemModel.php';

$title = 'home';
$myItemModel = new ItemModel();
$item_name_array = array();
$item_name_array =  $myItemModel->GetItemsNameArrayFromTable();

$formstart = "<form action='' method='post'>";


$seafood_urls = array();
$seafood_names = array();
$meat_urls = array();
$meat_names = array();
$fruit_urls = array();
$fruit_names = array();

foreach($item_name_array as $item_name){
    $item_type = $myItemModel->GetItemCategoryByName($item_name);
   
    if($item_type ==='seafood'){
        array_push($seafood_urls, $myItemModel->GetItemUrlByName($item_name));
        array_push($seafood_names, $item_name);
    }
    if($item_type ==='fruit'){
        array_push($fruit_urls, $myItemModel->GetItemUrlByName($item_name));
        array_push($fruit_names, $item_name);
    }
    if($item_type ==='meat'){
        array_push($meat_urls, $myItemModel->GetItemUrlByName($item_name));
        array_push($meat_names, $item_name);
    }
}

$col_lg_array1 = array();
for($i =0; $i<3; $i++){
    array_push($col_lg_array1, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$seafood_urls[$i]' alt='item' height='277'>
        <h4> $seafood_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$seafood_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu1 = implode(" ", $col_lg_array1);
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


$col_lg_array4 = array();
for($i =0; $i<3; $i++){
    array_push($col_lg_array4, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$fruit_urls[$i]' alt='item' height='277'>
        <h4> $fruit_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$fruit_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu4 = implode(" ", $col_lg_array4);
$col_lg_array5 = array();

for($i =3; $i<6; $i++){
    array_push($col_lg_array5, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$fruit_urls[$i]' alt='item' height='277'>
        <h4> $fruit_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$fruit_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu5 = implode(" ", $col_lg_array5);

$col_lg_array6 = array();

for($i =6; $i<9; $i++){
    array_push($col_lg_array6, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$fruit_urls[$i]' alt='item' height='277'>
        <h4> $fruit_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
           <input type='checkbox' name='items[]' value='$fruit_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}

$itemsmenu6 = implode(" ", $col_lg_array6);

$col_lg_array7 = array();
for($i =0; $i<3; $i++){
    array_push($col_lg_array7, "<div class='col-lg-4'>  
        <fieldset>
        <img src='$meat_urls[$i]' alt='item' height='277'>
        <h4> $meat_names[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart 
            <input type='checkbox' name='items[]' value='$meat_names[$i]'> </a>
        </p>
        </fieldset>
        </div>"); 
    
}
$itemsmenu7 = implode(" ", $col_lg_array7);


$formend ='<input type="submit" name="formSubmit" value="Submit"></form> ';

include 'Template.php';
?>
