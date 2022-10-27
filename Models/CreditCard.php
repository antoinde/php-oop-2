<?php

class CreditCard {

    public $numero_carta;
    public $data_scadenza; // 2027
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
        $Year = date("Y");
        if ( $this->data_scadenza >= $Year) 
        return true;
        else
        return false;
    }
}

?>
