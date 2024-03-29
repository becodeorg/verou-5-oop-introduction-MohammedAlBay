<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

// Make a global const called BARNAME with value "Het Vervolg"
const BARNAME = "Het Vervolg";

include_once "Beverage.php";
include_once "Beer.php";

// Create an instance of the Beer class to be able to call upon its methods
$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// Print the constant
echo BARNAME . "<br>";
// Print function from Beverage class
echo $Duvel->get_globalConstant() . "<br>";
// Print function from Beer class
echo $Duvel->get_globalConstantFromBeer() . "<br>";
// Print protected static $address without creating an instance of Beverage class and in two different ways
echo Beer::get_AddressFromChildClass() . "<br>";
echo $Duvel->get_AddressFromChildClass();
