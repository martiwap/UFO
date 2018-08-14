<?php

class Actions extends Ship
{
    public function showEnemy()
    {
        return $this->getName() . ' is arrived on the scene!';
    }

    public function chaseHero()
    {
        return $this->getName() . ' is chasing after the Hero! Watch Out!';
    }

    public function damageHero()
    {
        return $this->getName() . ' is causing damage for ' . $this->getDamage() .'\n Run!';
    }

    public function skipAttack()
    {
        return $this->getName() . ' skipped the attack! Grande!';
    }

    public function runAway()
    {
        return 'Oh Shit! ' . $this->getName() . ' is running away scared!';
    }
}