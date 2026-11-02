<?php

    class Transaction
    {
        public $book;
        public $member;

        public function pinjamBuku(){
            if($this->book->tersedia == true){
                $this->book->tersedia = false;

                echo "Member : ".$this->member->nama."<br>". "Berhasil meminjam buku"."<br>". "Buku : " . $this->book->judul."<br>";

            }else{
                echo "Buku sedang dipinjam."."<br>";
            }
        }

    }




?>