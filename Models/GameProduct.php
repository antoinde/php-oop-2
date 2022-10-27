<?php
    require __DIR__ . '/PetProducts.php';

    class GameProduct extends PetProduct {

        public $categoria = 'Giochi';
        public $materiale= 'Plastic';
        public $sonoro=true;    //    true | false
        public $abilità=false;
        public $strategia=false;

    }
        
?>