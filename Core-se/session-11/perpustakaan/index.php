<?php
    require_once "Book.php";
    require_once "Member.php";
    require_once "Transaction.php";

    $buku1 = new Book();
    $buku1->judul = "Laskar Pelangi";
    $buku1->pengarang = "Andrea Hirata";

    $buku2 = new Book();
    $buku2->judul = "Bumi Manusia";
    $buku2->pengarang = "Pramoedya Ananta Noer";

    $anggota1 = new member();
    $anggota1->nama = "Budi";
    $anggota1->nomorAnggota = "MR0001";

    $anggota2 = new member();
    $anggota2->nama = "Ayu";
    $anggota2->nomorAnggota = "MR0002";

    echo "<h2>Informasi Buku</h2>";

    $buku1->showInfo();
    echo "<hr>";
    $buku2->showInfo();

    echo "<h2>Informasi Anggota</h2>";

    $anggota1->showInfo();
    echo "<hr>";
    $anggota2->showInfo();

    //Borrowing process

    echo "<h2>Proses Peminjaman</h2>";
    
    $transaction1 = new Transaction();
    $transaction1->book = $buku1;
    $transaction1->member = $anggota1;
    $transaction1->pinjamBuku();

    $transaction2 = new Transaction();
    $transaction2->book = $buku1;
    $transaction2->member = $anggota2;
    $transaction2->pinjamBuku();

    $transaction3 = new Transaction();
    $transaction3->book = $buku2;
    $transaction3->member = $anggota2;
    $transaction3->pinjamBuku();


?>