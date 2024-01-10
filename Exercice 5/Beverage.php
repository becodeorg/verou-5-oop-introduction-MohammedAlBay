<?php

declare(strict_types=1);

class Beverage
{
  // Properties
  private string $color;
  private float $price;
  private string $temperature;

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

  // Make function to set a new price
  public function set_Price(float $price)
  {
    $this->price = $price;
  }

  // Make a getter method to get the actual price
  public function get_Price(): float
  {
    return $this->price;
  }
}