<?php

namespace BrainGames\Games\EvenGame;

use function cli\line;
use function cli\prompt;

/**
 * Run main EvenGame mechanics
 * @return array contains answer, your answer, boolean result
 * between those answers
 */
function isEven(): array
{
    $num = rand(1, 100);
    line("Question: {$num}");
    $answer = ($num % 2 === 0) ? "yes" : "no";
    $yourAnswer = prompt("Your answer");

    return [$answer, $yourAnswer, $answer === $yourAnswer];
}

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
