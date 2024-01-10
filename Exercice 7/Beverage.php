<?php

declare(strict_types=1);

class Beverage
{
  // Properties
  private string $color;
  private float $price;
  private string $temperature;
  // static property that can only be accessed from inside this class (= protected) called 'address' which has the value "Melkmarkt 9, 2000 Antwerpen"
  protected static string $address = "Melkmarkt 9, 2000 Antwerpen";

  // Construct
  public function __construct(string $color, float $price)
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = "cold";
  }

  // The function
  public function getInfo() 
  {
    return "This beverage is $this->temperature, has a $this->color color and costs &euro;$this->price.";
  }

  // Make function to get the global constant
  public function get_globalConstant()
  {
    return BARNAME;
  }
}