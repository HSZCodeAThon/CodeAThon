<?php
class StoreEntity
{
    public $id;
    public $name;
    public $distance;
    public $image;
    
    function __construct($id, $name, $distance, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->distance = $distance;
        $this->image = $image;
    }
}
?>
