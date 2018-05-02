<?php

class Drink
{
    protected $name = null;

    protected function setDrinkName($name)
    {
        $this->name=$name;
    }

    public function getDrinkName()
    {
        return $this->name;

    }

}


class Coffee extends Drink
{
    public function __construct()
    {
       Drink:: setDrinkName ('coffee');
       //$this->setDrinkName('coffee');
    }
}

$coffee = new Coffee;
echo "My new drink is:".$coffee->getDrinkName();

