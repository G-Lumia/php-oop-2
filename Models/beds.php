<?php 
    class Bed extends Product
    {
        public $material, $model;

        public function __construct(string $name, float $price, string $category, string $productImg, string $material) 
        {
            parent::__construct($name, $price, $category, $productImg);
            $this->material = $material;
        }

        public function getMaterial(){
            return $this->material;
        }
    }
?>