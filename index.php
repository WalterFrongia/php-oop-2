<!-- 1)CREARE DELLE CLASSI DI UNO SHOP ONLINE.
    2)INSERIRE COME CLASSI PRODOTTI E UTENTI CHE ACQUISTANO 
    3)FARE INTERAGIRE TRA LORO GLI OGGETTI, ESEMPIO UTENTE CHE INSERISCE CARTA DI CREDITO

ESEMPIO:   $c = new CreditCard(..); / $user->insertCreditCard($c); -->
<!-- // carta di credito
// indirizzo -->

<?php

class Articol{
    public $categories; 

    public function __construct($_categories){
        $this->categories = $_categories;
    }
}

class Users{
    public $name;
    public $typeClient;

    public function __construct($_name, $_typeClient){
        $this->name = $_name;
        $this->typeClient = $_typeClient;
    }
}

class Cart{
    public $status;
    public $totalArticles; 
    public $price;

    public function __construct($_status, $_totalArticles, $price){
        $this->status = $_status;
        $this->totalArticles = $totalArticles;
        $this->price = $_price;
    }
}


?>
