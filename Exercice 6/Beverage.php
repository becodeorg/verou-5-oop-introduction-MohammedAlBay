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

  public function get_globalConstant()
  {
    return GLOBAL_CONSTANT;
  }
}