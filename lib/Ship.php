<?php

class Ship
{
  private $name;

  private $weaponPower = 0;
  
  private $jediFactor = 0;
  
  private $strength = 0;

  private $underRepair;

  // constructor
  public function __construct($name)
  {
    $this->name = $name;
    $this->underRepair = mt_rand(1, 100) < 30;
  }

  // methods
  public function isFunctional() 
  {
    return !$this->underRepair;
  }

  public function sayHello() 
  {
    echo 'Hello!';
  }

  public function getNameAndSpecs($useShortFormat = false)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: %s/%s/%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    } else {
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }
  }

  public function doesGivenShipHaveMoreStrength($givenShip)
  {
    return $givenShip->strength > $this->strength;
  }

  // Getters and setters
  // name
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  // weaponPower
  public function getWeaponPower()
  {
    return $this->weaponPower;
  }

  public function setWeaponPower($weaponPower)
  {
    if (!is_numeric($weaponPower)) {
      throw new Exception('Invalid weaponPower passed '. $weaponPower);
    } 
    $this->weaponPower = $weaponPower;
  }
  
  // jediFactor
  public function getJediFactor()
  {
    return $this->jediFactor;
  }

  public function setJediFactor($jediFactor)
  {
    if (!is_numeric($jediFactor)) {
      throw new Exception('Invalid jediFactor passed '. $jediFactor);
    } 
    $this->jediFactor = $jediFactor;
  }

  // strength
  public function getStrength()
  {
    return $this->strength;
  }

  public function setStrength($strength)
  {
    if (!is_numeric($strength)) {
      throw new Exception('Invalid strength passed '. $strength);
    } 
    $this->strength = $strength;
  }

  
}