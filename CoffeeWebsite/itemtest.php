<?php
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
//foreach ($item_name_array as $itemname){
for($i =0; $i<sizeof($item_name_array); $i++){
    array_push($col_lg_array, "<div class='col-lg-4'>
        <img src='$itemurl_array[$i]' alt='item' height='277'>
        <h4> $item_name_array[$i] </h4>
        <p><a class='btn btn-default' href='#' role='button'>Add to cart &raquo;</a></p>
        </div>");
}
$col_lgs = join('', $col_lg_array);

if(isset($_POST["apple"]))
{
    $storeController->InsertItemByName('apple',$this->shoppinglist);
}
if(isset($_POST["apple"]))
{
    $storeController->InsertItemByName('apple',$this->shoppinglist);
}
include 'Template.php';
?>
