<?php
include __DIR__ . '/Category.php';
class Product {
    public string $title;
    public string $cover;
    public float $price;
    public float $rating;
    public Category $category;
    public function __construct($title, $cover, $price, $rating, $category){
        $this->title = $title;
        $this->cover = $cover;
        $this->price = $price;
        $this->rating = $rating;
        $this->category = $category;
    }
    public function showAll() {
        echo 'showAll';
    }
    public function showDetail() {
        echo 'showDetail'; 
    }
    public function searchData() {
        echo 'searchData';
    }
    function getVote() {
        $voteINT = ceil($this->rating / 2);
        $template = "<p>";
        for ($n = 1; $n <- 5; $n++) {
            $template .= $n <= $voteINT ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
      
    }
}