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
   
    
    function __construct($_id, $_name, $_image, $_category) {
        $this->id = $_id;
        $this->name = $_name;
        $this->image = $_image;
        $this->category = $_category;
        
    }

   
}

?>
