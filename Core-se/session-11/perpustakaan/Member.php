<?php

    class Member
    {
        public $nama;
        public $nomorAnggota;
        public $tersedia = true;

        public function showInfo(){
            echo "Nama Anggota : ". $this->nama ."<br>";
            echo "Nomor Anggota : ". $this->nomorAnggota ."<br>";
        }
    }



?>