<?php


class Factory
{
    public static function makeNewShip()
    {
        return new Ship;
    }

    public static function startNewGame()
    {
        return new Game;
    }
}