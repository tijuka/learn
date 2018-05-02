<?php

class Person

{

    private $ID = "Person ID";
    private $name = "Person name";


    public function setID($ID)
    {
        $this->ID=$ID;
    }
    public function getID()
    {
        return $this->ID;
    }

    public function setName($name)
    {
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }

}

$person = new Person;

?>
