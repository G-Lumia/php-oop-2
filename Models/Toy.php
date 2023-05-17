<?php 
    // Classe figlia di Product, create per definire un prodotto Toy
    class Toy extends Product
    {
        public $material, $model, $type;

        // metodo costruttore
        public function __construct(string $name, float $price, string $category, string $productImg, string $material, string $model, string $type) 
        {
            // metodo costruttore della classe padre
            parent::__construct($name, $price, $category, $productImg);
            $this->material = $material;
            $this->type = $type;
            $this->model = $model;
        }

        // metodi GET
        public function getMaterial(){
            return $this->material;
        }
        public function getModel(){
            return $this->model;
        }
        public function getType(){
            return $this->type;
        }
    }
?>
