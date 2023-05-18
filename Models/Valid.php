<?php 
    trait Valid{
        public function isValid(){
            if((get_class($this) == "Toy")||(get_class($this) == "Bed")||(get_class($this) == "Food"))
            {
                return true;
            }
            else
            {
                throw new Exception('Damn you Jerry you doomed us all');
            }
    }
}
?>