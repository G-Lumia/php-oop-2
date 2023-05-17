<?php 
    // Viene creata la class padre product, con delle propietà necessarie per definire tutti gli altri prodotti
    class Product
    {
        public $name, $price, $category, $productImg;

        // metodo costruttore
        public function __construct(string $name, float $price, string $category, string $productImg) 
        {
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
            $this->productImg = $productImg;
        }

        // metodi GET
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

    // Vengono incluse la classi figlie, generate da Products
    
    include __DIR__ . '/beds.php';
    include __DIR__ . '/toys.php';
    include __DIR__ . '/food.php';

?>