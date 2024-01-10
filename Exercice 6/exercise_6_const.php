<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

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
echo $Duvel->get_globalConstantFromBeer();