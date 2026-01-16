<?php
// Include required files
require "car.php";
require "connect.php";

// Create a Car object
$myCar = new Car("Toyota", "Corolla", 2017);

// Display output
echo "<h2>Car Information</h2>";
echo "<p>" . $myCar->getCarInfo() . "</p>";

/*
Reflection:
The most challenging part of this lab was setting up the database connection
using PDO. The easiest part was creating the Car class and displaying the
object information in the browser.
*/
?>
