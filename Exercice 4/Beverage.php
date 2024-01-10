<?php

declare(strict_types=1);

class Beverage
{
  // Properties
  protected string $color;
  protected float $price;
  protected string $temperature;

  // Construct
  public function __construct(string $color, float $price)
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = "cold";
  }

  // The Methods
  // Getter method for color property
  public function get_Color(): string
  {
    return $this->color;
  }
  // Setter method for color property
  public function set_Color(string $color)
  {
    $this->color = $color;
  }

  // Getter method for price property
  public function get_Price(): float
  {
    return $this->price;
  }

  // Setter method for price property
  public function set_Price(float $price)
  {
    $this->price = $price;
  }

  // Getter method for temperature property
  public function get_Temperature(): string
  {
    return $this->temperature;
  }

  public function getInfo() 
  {
    return "This beverage is $this->temperature, has a $this->color color and costs &euro;$this->price.";
  }
}