<?php

namespace solutions;

// Define the Shape interface
interface Shape {
    public function calculateArea();
}

// Implement the Shape interface in the Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement the calculateArea method for the Circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Implement the Shape interface in the Rectangle class
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implement the calculateArea method for the Rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Calculate and display the area of the Circle
echo "Area of the Circle: " . $circle->calculateArea() . "<br>";

// Calculate and display the area of the Rectangle
echo "Area of the Rectangle: " . $rectangle->calculateArea() . "<br>";

?>
