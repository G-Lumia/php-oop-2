<?php 
    class Product
    {
        public $name, $price, $category, $productImg;

        public function __construct(string $name, float $price, string $category, string $productImg) 
        {
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
            $this->productImg = $productImg;
        }

        public function getName(){
            return $this->name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getCategory(){
            return $this->category;
        }
        public function getProductImg(){
            return $this->productImg;
        }
    }
?>