<?php

class CreditCard {

    public $numero_carta;
    public $data_scadenza;
    public $intestatario;
    public $CVV;

    function  __construct($_number, $_expiryDate, $_owner, $_CVV){
        $this->numero_carta = $_number;
        $this->data_scadenza = $_expiryDate;
        $this->intestatario = $_owner;
        $this->CVV = $_CVV;
    }

    public function isValid(){
        // check sulla data di scadenza
        // if (data_scadenza >= AnnoCorrente)
            return true;
    }
}

?>
