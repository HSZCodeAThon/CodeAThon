<?php
require ("Entities/ItemEntity.php");
require ("Model/ItemModel.php");


/**
 * Description of ItemController
 *
 * @author yang
 */
class ItemController {
    
    function CreateItemsMenu(){
        $myItemModel = new ItemModel();
        $item_name_array = array();
        $itemurl_array = array();
        $item_name_array =  $myItemModel->GetItemsNameArrayFromTable();
        $itemurl_array =  $myItemModel->GetItemsUrlArrayFromTable();
      

        $title = 'items';
        $col_lg_array = array();
        
        //foreach ($item_name_array as $itemname){

        for($i =0; $i<sizeof($item_name_array); $i++){
            if($i % 3 == 0){
                array_push($col_lg_array, "<div class='item>
                      <div class='row'> ");
            }
        
            array_push($col_lg_array, "<div class='col-lg-4'>  
                <fieldset>
                <img src='$itemurl_array[$i]' alt='item' height='277'>
                <h4> $item_name_array[$i] </h4>
                <p><a class='btn btn-default' href='#' role='button'>Add to cart &raquo;
                    <input type='checkbox' name='items[]' value='$itemurl_array[$i]'> </a>
                </p>
                </fieldset>
                </div>");   
            if($i == 2 || $i== 5 || $i==8){
                array_push($col_lg_array, "</div></div>");
            }
        }

        $col_lgs = join('', $col_lg_array);
        return  $col_lgs;
    }

}

?>
