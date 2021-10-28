<?php

class Article{
    public $name;
    public $price;
    public $categories; 

    public function __construct($_name, $_price, $_categories ){
        $this->name = $_name;
        $this->price = $_price;
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
    public $articles =[];

    public function __construct($_status){
        $this->status = $_status;
        
    }
    public function addArticle($article){
        array_push($this->articles,$article);
    }
}

$camicia = new Article("camicia",20,"abbigliamento");
var_dump($camicia);

$cart = new Cart("vuoto");
var_dump($cart);

$cart -> addArticle($camicia);
var_dump($cart);

?>
