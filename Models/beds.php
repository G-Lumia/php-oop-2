<?php 
// Classe figlia di Product, create per definire un prodotto Bed
    class Bed extends Product
    {
        public $material, $model;

         // metodo costruttore
        public function __construct(string $name, float $price, string $category, string $productImg, string $material) 
        {
            // metodo costruttore della classe padre
            parent::__construct($name, $price, $category, $productImg);
            $this->material = $material;
        }

        // metodi GET
        public function getMaterial(){
            return $this->material;
        }
    }
?>