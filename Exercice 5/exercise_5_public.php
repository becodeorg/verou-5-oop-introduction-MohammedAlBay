<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

include_once "Beverage.php";

$cola = new Beverage("black", 2);
echo $cola->getInfo();
echo "<br>";
// echo $cola->temperature; // I cannot find a solution to fix and print the temperature without using a getter function??
echo "<br>";
$cola->set_Price(3.50);
echo "New cola price is &euro;" . $cola->get_Price() . ".";