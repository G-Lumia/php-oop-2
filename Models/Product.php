<?php 
    include __DIR__ . '/Valid.php';    
    // Viene creata la class padre product, con delle propietà necessarie per definire tutti gli altri prodotti
    class Product
    {
        use Valid;

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

    class Human
    {
        use Valid;
        
        public $name, $surname, $job, $favoriteColor;

        // metodo costruttore
        public function __construct(string $name, string $surname, string $job, string $favoriteColor) 
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->job = $job;
            $this->favoriteColor = $favoriteColor;
        }

        // metodi GET
        public function getName(){
            return $this->name;
        }
        public function getSurname(){
            return $this->surname;
        }
        public function getJob(){
            return $this->job;
        }
        public function getFavoriteColor(){
            return $this->favoriteColor;
        }
    }

    // Vengono incluse la classi figlie, generate da Products
    
    include __DIR__ . '/Bed.php';
    include __DIR__ . '/Toy.php';
    include __DIR__ . '/Food.php';
    
?>