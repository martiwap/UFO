<?php

class Game
{
    private $score;
    private $length;

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setLengthGame($length)
    {
        $this->length = $length;
    }

    public function getLengthGame()
    {
        return $this->length;
    }
}