<?php 
include_once __DIR__ . '/Product.php';
class Movie extends Product {
    public $numPages;
    public function __construct($title, $numPages, $category, $cover, $price, $rating){

        $this->numPages = $numPages;
        parent::__construct($title, $cover, $price, $rating, $category);
    }
 
}
