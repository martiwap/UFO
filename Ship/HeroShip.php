<?php

class HeroShip extends Ship
{
    private $defence;

    public function setDefence($defence)
    {
        $this->defence = $defence;
    }

    public function getDefence()
    {
        return $this->defence;
    }
}