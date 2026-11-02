<?php
    class Cafe{
        public $cafeName;
        public $cafeAddress;

        public function showCafeDetail(){
            echo "<h2>".$this->cafeName."</h2>";
            echo "<p>Alamat: ".$this->cafeAddress."</p>";
        }
    }

?>