<?php
    class Book{
        public $title;
        public $genre;
        public $publisher;
        public $release_year;

        public function showDetail() {
            echo "Judul buku: " . $this->title . "<br>";
            echo "Genre: " . $this->genre . "<br>";
            echo "Publisher: " . $this->publisher . "<br>";
            echo "Release year: " . $this->release_year . "<br>";       
        }
    }

    $book = new Book();
    $book->title = "Harry Potter";
    $book->genre = "Magic";
    $book->publisher = "Test Publisher";
    $book->release_year = 2000;

    $book->showDetail("title");
    echo '<hr>';

    $book->showDetail("genre");
    echo '<hr>';

    $book->showDetail("publisher");
    echo '<hr>';

    $book->showDetail("release_year");
    echo '<hr>';

?>