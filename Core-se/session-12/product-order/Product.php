<?php
    class Product{
        private $name;
        private $price;

        public function __construct($name, $price){
            if($price <0){
                echo "Harga Product tidak boleh dibawah 0";
            }

            $this->name = $name;
            $this->price = $price;

        }

        public function getName(){
            return $this->name;
        }

        public function getPrice(){
            return $this->price;
        }
        
    }






?>