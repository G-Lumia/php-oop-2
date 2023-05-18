<?php

    class Human
    {
        use Valid;
        
        public $name, $surname, $job, $favoriteColor, $imgLink;

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

?>
