<?php

namespace BrainGames\GameLoop;

use function BrainGames\Cli\greeting;
use function cli\line;

/**
 * Run main game loop
 * @param string $gameDescription -- string representation of the game
 * @param callable $gameMechanics -- callback function of game mechanics
 * @return void
 */
function runGame(string $gameDescription, callable $gameMechanics): void
{
    $numberOfTry = 3;
    line("Welcome to the Brain Games!");
    $name = greeting();
    line("{$gameDescription}");

    $tries = null;

    for ($i = 1; $i <= $numberOfTry; $i++) {
        [$answer, $yourAnswer, $res] = $gameMechanics();

        if (!$res) {
            line("'{$yourAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!");
            break;
        }

        line("Correct!");
        $tries = $i;
    }

    if ($tries === $numberOfTry) {
        line("Congratulations, {$name}!");
    }
}
