<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle('Circle 1', 3);
echo "Circle are: " . $circle->calculateARea() . "<br>";
echo "Circle perameter: " . $circle->calculatePerameter() . "<br>";

$cylinder = new Cylinder("Cylinder 1", 3, 4);
echo "Cylinder area: " . $cylinder->calculateAreaCylinder() . '<br>';
echo 'Cylinder volume: '. $cylinder->calculateVolume() . '<br>';

$rectangle = new Rectangle('Rectangle 1', 4, 5);
echo  'Rectangle area: ' . $rectangle->calculateAre() . '<br>';
echo 'Rectangle perameter: ' . $rectangle->calculatePerameter() . "<br>";

$square = new Square("Square 1", 4);
echo "Square area: " . $square->calculateAre() . "<br>";
echo "Square perameter: " . $square->calculatePerameter();