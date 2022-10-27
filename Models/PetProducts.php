
<?php
    
    class PetProduct {
        
        public $nome='';
        public $categoria = '';
        public $prezzo;
        public $descrizione='';
        public $pz; // (numero prodotti disponibili)
        public $taglia='Taglia piccola (Da 1 a 10 kg)';
        // Taglia media (Da 10 a 25 kg)
        // Taglia grossa (Da 26 a 45 kg)

        public function __construct($_nome, $_prezzo, $_taglia, $_pz) {
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->taglia = $_taglia;
            $this->pz = $_pz;
        }

    }
        
?>
