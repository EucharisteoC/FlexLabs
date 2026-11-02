<?php

    class Book
    {
        public $judul;
        public $pengarang;
        public $tersedia = true;

        public function showInfo(){
            echo "Judul : ". $this->judul."<br>";
            echo "Pengarang : ". $this->pengarang."<br>";
        }

    }

?>