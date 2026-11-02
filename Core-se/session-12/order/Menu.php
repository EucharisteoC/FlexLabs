<?php

    class Menu{
        public $menuName;
        public $price;
        public $availability = true;

        public function showDetailMenu(){
            echo "Nama menu: ". $this->menuName . "<br>";
            echo "Harga Rp: ". number_format($this->price). "<br>";

            if($this->availability){
                echo "Status: Tersedia"."<br>";
            }else{
                echo "Status: Tidak tersedia"."<br>";
            }
        }

        public function updateStatus(){
            $this->availability = false;
        }
    }

?>