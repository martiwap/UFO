<?php


class Factory
{
    public function makeNewShip()
    {
        return new Ship;
    }

    public function startNewGame($gameLength)
    {
        return new Game;
    }
}