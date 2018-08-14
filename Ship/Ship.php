<?php

class Ship
{
    private $name;
    private $speed;
    private $damage;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSpeed($name)
    {
        $this->name = $name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    public function getDamage()
    {
        return $this->damage;
    }
}