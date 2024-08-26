<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct( $title, $availableCopies ) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ( $this->availableCopies > 0 ) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }
    public function returnBook() {
        $this->availableCopies++;
    }
}

$book1 = new Book( "The Great Gatsby", 5 );
$book2 = new Book( "To Kill a Mockingbird", 3 );

$book1->borrowBook();
$book2->borrowBook();

echo "\"" . $book1->getTitle() . "\": " . $book1->getAvailableCopies() . "\n";
echo "\"" . $book2->getTitle() . "\": " . $book2->getAvailableCopies();

?>
