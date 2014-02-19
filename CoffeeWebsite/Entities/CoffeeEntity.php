<?php
class CoffeeEntity
{
    public $id;
    public $name;
    public $family;
    public $sex;
    public $parents;
    public $country;
    public $image;
    public $review;
    
    function __construct($id, $name, $family, $sex, $parents, $country, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->family = $family;
        $this->sex = $sex;
        $this->parents = $parents;
        $this->country = $country;
        $this->image = $image;
        $this->review = $review;
    }
}
?>
