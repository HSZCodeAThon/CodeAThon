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

$formend ='<input type="submit" name="formSubmit" value="Submit"></form> ';


include 'Template.php';
?>
