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

// Make a global const called GLOBAL_BARNAME with value "Het Vervolg"
const GLOBAL_BARNAME = "Het Vervolg";

include_once "Beverage.php";
include_once "Beer.php";

// Print the constant
echo GLOBAL_BARNAME;