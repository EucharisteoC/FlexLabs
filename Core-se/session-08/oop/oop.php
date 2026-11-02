<?php
    class Handphone{
        public $brand;
        public $model;
        public $color;

        public function turnon(){
            echo $this->brand . " " . $this->model . " " . $this->colour . " Menyala";
        }

        public function turnoff(){
            echo $this->brand . " " . $this->model . " " . $this->colour . " Mati";
        }

        public function showInfo() {
            echo "Brand: " . $this->brand . "<br>";
            echo "Model: " . $this->model . "<br>";
            echo "Warna: " . $this->colour . "<br>";       
        }

    }

    $hp1 = new Handphone();
    $hp1->brand = "Samsung";
    $hp1->model = "Galaxy 12";
    $hp1->colour = "Hitam";

    //$hp1->turnon();
    //$hp1->turnoff();
    $hp1->showInfo();

    echo '<hr>';
    
    $hp2 = new Handphone();
    $hp2->brand = "Oppo";
    $hp2->model = "Reno 12";
    $hp2->colour = "Putih";

    //$hp2->turnon();
    //$hp2->turnoff();
    $hp2->showInfo();

    echo '<hr>';

    $hp3 = new Handphone();
    $hp3->brand = "Nokia";
    $hp3->model = "Ketuaan";
    $hp3->colour = "Karatan";
    $hp3->showInfo();
?>