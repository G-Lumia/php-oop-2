<?php 
    class Toy extends Product
    {
        public $material, $model, $type;

        public function __construct(string $name, float $price, string $category, string $productImg, string $material, string $model, string $type) 
        {
            parent::__construct($name, $price, $category, $productImg);
            $this->material = $material;
            $this->type = $type;
        }

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
