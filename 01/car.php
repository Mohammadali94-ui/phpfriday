<?php
// car.php
// Defines a Car class for Lab One

class Car
{
    // Car properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to return car information
    public function getCarInfo()
    {
        return $this->make . " " . $this->model . " (" . $this->year . ")";
    }
}
