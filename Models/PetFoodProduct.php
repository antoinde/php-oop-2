<?php
    require __DIR__ . '/PetProducts.php';

    class PetFoodProduct extends PetProduct {

        public $categoria = 'Alimentari';
        public $scadenza='';
        public $weight;
        public $ingredienti=[];

    }
        
?>