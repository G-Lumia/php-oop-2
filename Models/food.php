<?php 
    include __DIR__ . '/products.php';

    class Food extends Product
    {
        public $weight, $Kcal, $type;

        public function __construct(string $name, float $price, string $category, string $productImg, float $weight, float $Kcal, string $diet) 
        {
            parent::__construct($name, $price, $category, $productImg);
            $this->weight = $weight;
            $this->Kcal = $Kcal;
            $this->diet = $diet;
        }

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
