<?php

$game = Factory::startNewGame(5);
$enemy = Factory::makeNewShip() ;
$hero = Factory::makeNewShip();
$gameScore = $game->setScore(0);
$gameLentgh = $game->setLengthGame(30000);
$timeTracker = 0;

$enemyName = $enemy->setName($_POST['enemyName']);
$numberOfEnemies = $_POST['enemyQuantity'];
$heroName = $hero->setName($_POST['heroName']);

$randomSpeed = rand(20, 100);
$randomEnemyDamage = rand(1, 10);
$randomHeroDefence = rand(2, 11);

$enemySpeed = $randomSpeed * 1.5;
$enemies = $enemy * $numberOfEnemies;
$heroSpeed = $randomSpeed * 1.2;

if (isset($_POST['start'])) {

    echo 'Let\' start this battle';



    while ($timeTracker < $gameLentgh){
        //move the enemies on random coordinate left to right and up and down
        //move hero left to right

        $timeTracker += 5;
    }

}



