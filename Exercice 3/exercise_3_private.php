<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

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