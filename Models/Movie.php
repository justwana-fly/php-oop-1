<?php 
include_once __DIR__ . '/Product.php';
class Movie extends Product {
    public $language;
    public function __construct($title, $language, $category, $cover, $price, $rating){

        $this->language = $language;
        parent::__construct($title, $cover, $price, $rating, $category);
    }
 
  

    public function printCategory() {
        echo $this->category->name;
    }
}

