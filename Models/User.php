<?php
    
   require __DIR__ . '/CreditCard.php';

   class User {

    public $carrello=[];
    public $cartaDiCredito;


    public function addToCart($PetProduct){
        $this->carrello[] = $PetProduct;
    }

    public function checkProducts(){
        $prezzo_totale=0;
        
        foreach( $this->carrello as $singoloProdotto){
            $prezzo_totale += $singoloProdotto->prezzo;
        }
        
        // mostra totale da pagare ...
        return [
            "prezzo_totale" => $prezzo_totale,
            "prodotti_del_carrello" => $this->carrello
        ];

    }

    
    public function addCreditCard( $_number, $_expiryDate, $_owner, $_CVV ) {
        $this->cartaDiCredito = new CreditCard($_number, $_expiryDate, $_owner, $_CVV);
    }

    public function pay(){
        // paga con carta
        if( $this->cartaDiCredito->isValid() ) {
            // procedi al pagamento
        }

    }

   }
        
?>