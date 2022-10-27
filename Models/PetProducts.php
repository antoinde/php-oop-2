
    <!-- 
        CONSEGNA DELL'ESERCIZIO:

        Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        1) L'e-commerce vende prodotti per gli animali.
        2) I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
        3) L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 
           20% di sconto su tutti i prodotti.
        4) Il pagamento avviene con la carta di credito, che non deve essere scaduta.
        5) [ Bonus ]: Definire la carta di credito come classe e associarla all'utente 
    --->

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

        public function __construct($_nome, $_prezzo, $_taglia) {
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->taglia = $_taglia;
        }

    }
        
?>
