<?php

$game = Factory::startNewGame();
$enemy = Factory::makeNewShip() ;
$hero = Factory::makeNewShip();

$gameScore = $game->setScore(0);
$game->setLengthGame(300);
$timeTracker = 0;

$enemy->setName(readline("Enter your enemies' name : "));
$numberOfEnemies = 10;
$hero->setName(readline("Enter your hero's name : "));

$randomSpeed = rand(20, 100);
$randomEnemyDamage = rand(1, 10);
$randomHeroDefence = rand(2, 11);

$enemySpeed = $randomSpeed * 1.5;
$enemies = $enemy * $numberOfEnemies;
$heroSpeed = $randomSpeed * 1.2;

/* Beginning of the game*/
echo 'Let\' start this battle';

while ($timeTracker < $game->getLengthGame()) {

    $heroDamage = $randomHeroDefence - $randomEnemyDamage;
    echo 'Oh shit! your Hero has been damaged of ' . $heroDamage;
    $randomHeroDefence -= 0.4;

    sleep(1);
    echo 'Don\' give up!';

    $timeTracker += 5;

    $gameScore += (int)rand(20, 100);
}

sleep(2);
for ($i = 0; $i < 10; $i++) {
    echo '.';
    echo '\n';
}

echo 'The battle is over! ';
echo '\n Your hero has been damaged for ' . $heroDamage . '\n And you with your speedy of ' . $heroSpeed . 'you scored ' . $game->getScore();
echo '\n Well done ' . $hero->getName();

?>
