<?php

namespace solutions;

// Define a class called 'Book'
class Book {
    // Properties of the class
    public $title;
    public $author;
    public $price;

    // Constructor method to initialize properties when an object is created
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to display information about the book
    public function displayInfo() {
        echo "Title: {$this->title}, Author: {$this->author}, Price: {$this->price}<br>";
    }
}

// Create objects (instances) of the 'Book' class
$book1 = new Book("The Catcher in the Rye", "J.D. Salinger", 10.99);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 12.50);

// Display information about the books using the 'displayInfo' method
echo "Information about Book 1:<br>";
$book1->displayInfo();

echo "<br>";

echo "Information about Book 2:<br>";
$book2->displayInfo();

?>
