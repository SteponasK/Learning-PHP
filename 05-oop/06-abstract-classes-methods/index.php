<?php

// This class can not be instantiated (created as an obejct)
abstract class Shape
{
    protected $name;
    // Abstract method (classes that inherit it, HAVE TO IMPLEMENT THIS FUNCTION ON THEIR OWN)
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete method (classes that inherit, can use it)
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    // I have to implement calculateArea() method, otherwise i get an error
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 15);
// var_dump($circle);

$rectangle = new Rectangle('Rectangle', 5, 10);
echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';
// var_dump($rectangle);
