<?php
    class Product{
        protected $name;
        protected $price;
        protected $discount;

        public function __construct($name, $price, $discount){
            $this->name = $name; $this->price = $price; $this->discount = $discount;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setDiscount($discount){
            $this->$discount = $discount;
        }
        public function getDiscount(){
            return $this->discount;
        }
    }

    class cdMusic extends Product{
        private $artist; 
        private $genre;

        public function __construct($name, $price, $discount, $artist, $genre){
            parent::__construct($name, $price, $discount);
            $this->artist = $artist;
            $this->genre = $genre;
        }
        public function getDiscount(){
            $this->discount = $this->discount;
            return $this->discount;
        }
        public function getPrice(){
            $this->price = $this->price + $this->price*0.1;
            $this->price = $this->price - $this->price*$this->discount;
            $this->price = $this->price - $this->price*0.05;
            return $this->price;
        }
        public function setArtist($artist){
            $this->$artist = $artist;
        }
        public function getArtist(){
            return $this->artist;
        }
        public function setGenre($genre){
            $this->$genre = $genre;
        }
        public function getGenre(){
            return $this->genre;;
        }
    }

    class cdRack extends Product{
        private $capacity;
        private $model;

        public function __construct($name, $price, $discount, $capacity, $model){
            parent::__construct($name, $price, $discount);
            $this->capacity = $capacity;
            $this->model = $model;
        }
        public function getDiscount(){
            return $this->discount;;
        }
        public function getPrice(){
            $this->price = $this->price + $this->price*0.15;
            $this->price = $this->price - $this->price*$this->discount;
            return $this->price;
        }
        public function setCapacity($capacity){
            $this->$capacity = $capacity;
        }
        public function getCapacity(){
            return $this->capacity;
        }
        public function setModel($model){
            $this->$model = $model;
        }
        public function getModel(){
            return $this->model;
        }
    }

    $barang1 = new cdMusic("barang1", 70000, 0.8, "mayer", "RnB");
    $barang2 = new cdRack("barang2", 600000, 0.6, "200", "model");
            
    echo "Nama : ".$barang1->getName()." - harga : Rp".$barang1->getPrice()." - potongan : ".$barang1->getDiscount()." - artis : ".$barang1->getArtist()." - genre : ".$barang1->getGenre();
    echo "<br>";
    echo "Nama : ".$barang2->getName()." - harga : Rp".$barang2->getPrice()." - potongan : ".$barang2->getDiscount()." - kapasitas : ".$barang2->getCapacity()." - model : ".$barang2->getModel();


?>