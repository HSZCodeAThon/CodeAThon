<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemEntity
 *
 * @author yang
 */
class ItemEntity {
    //put your code here
    public $id;
    public $name;
    public $image;
    public $category;
   
    
    function __construct($id, $name,  $image, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
        
    }
}

?>
