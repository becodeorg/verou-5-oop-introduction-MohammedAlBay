<?php

declare(strict_types=1);

include_once "Beverage.php";

// Beer is inherited from Beverage through the keyword 'extends'
class Beer extends Beverage
{
  // Properties
  protected string $name;
  protected float $alcoholPercentage;

  // Construct function
  public function __construct(string $color, float $price, string $name, float $alcoholPercentage) 
  {
    // Calling on the parent construct to properly access & initialize the parent properties in Beverage class before initializing child properties 
    parent::__construct($color, $price);
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  // Methods
  // Getter method for name property
  public function get_Name(): string
  {
    return $this->name;
  }

  // Getter method to get the alcohol percentage property
  public function get_AlcoholPercentage(): float
  {
    return $this->alcoholPercentage;
  }

  private function beerInfo()
  {
    return "Hi, I'm a $this->name, I have an alcohol percentage of $this->alcoholPercentage and a " . $this->get_Color() . " color.";
  }

  // Make public method to be able to access the private beerInfo() method
  public function get_beerInfo()
  {
    return $this->beerInfo();
  }
}