<?php

require __DIR__ . '/User.php';

class RegisteredUser extends User {
    public $nome;
    public $cognome;
    public $password;

    private $sconto = 20;

    public function checkProducts(){
        $prezzo_totale=0;
        
        foreach( $this->carrello as $singoloProdotto){
            $prezzo_totale += $singoloProdotto->prezzo;
        }
        // applica sconto
        $prezzo_totale= $prezzo_totale * ( (100 - $this->sconto) / 100 );


        // mostra totale da pagare ...
        return [
            "prezzo_totale_scontato" => $prezzo_totale,
            "prodotti_del_carrello" => $this->carrello
        ];

    }


}

?>