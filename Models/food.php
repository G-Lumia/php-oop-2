<?php 
    // Classe figlia di Product, create per definire un prodotto Food
    class Food extends Product
    {
        public $weight, $Kcal, $type;

        // metodo costruttore
        public function __construct(string $name, float $price, string $category, string $productImg, float $weight, float $Kcal, string $diet) 
        {
            // metodo costruttore della classe padre
            parent::__construct($name, $price, $category, $productImg);
            $this->weight = $weight;
            $this->Kcal = $Kcal;
            $this->diet = $diet;
        }

        // metodi GET
        public function getWeight(){
            return $this->weight;
        }
        public function getKcal(){
            return $this->Kcal;
        }
        public function getDiet(){
            return $this->diet;
        }
    }
?>
