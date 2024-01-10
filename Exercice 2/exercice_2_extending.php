<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

include_once "Beverage.php";
include_once "Beer.php";

// The $cola object from exerice 1
$cola = new Beverage("black", 2);

// Instantiate a new object called "Duvel" with the use of the construct
$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// One way of printing method
echo "Alcohol percentage: " . $Duvel->get_AlcoholPercentage() . "%";
echo "<br>";
// Alternative way of printing the method by assigning it to a new variable & echo said variable
$alcoholAmount = $Duvel->get_AlcoholPercentage();
echo "Alcohol percentage: " . $alcoholAmount . "%";
echo "<br>";
echo "Color: " . $Duvel->color;
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";

// Trying to call on an undefined method in Beverage class for $cola object resulting in error
$cola->get_AlcoholPercentage();