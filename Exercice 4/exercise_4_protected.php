<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

include_once "Beverage.php";
include_once "Beer.php";

// Instantiate a new object called "Duvel" with the use of the construct
$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// One way of printing method
echo "Alcohol percentage of Duvel is: " . $Duvel->get_AlcoholPercentage() . "%";
echo "<br>";
// Alternative way of printing the method by assigning it to a new variable & echo said variable
$alcoholAmount = $Duvel->get_AlcoholPercentage();
echo "Alcohol percentage of Duvel is: " . $alcoholAmount . "%";
echo "<br>";
echo "Color of Duvel is: " . $Duvel->get_Color();
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";

$Duvel->set_Color("light");
echo "New color of Duvel is: " . $Duvel->get_Color();
echo "<br>";
echo $Duvel->get_beerInfo();