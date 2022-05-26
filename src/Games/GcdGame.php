<?php

namespace BrainGames\Games\GcdGame;

use function cli\line;
use function cli\prompt;

/**
 * Find gcd and return the result
 * @param int $a -- number 1
 * @param int $b -- number 2
 * @return int -- return int result -- gcd
 */
function findGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }

    return findGcd($b, $a % $b);
}

/**
 * Run main GcdGame mechanics
 * @return array contains answer, your answer, boolean result
 * between those answers
 */
function isGcd(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    line("Question: {$num1} {$num2}");

    $answer = findGcd($num1, $num2);
    $yourAnswer = (int)prompt("Your answer");

    return [$answer, $yourAnswer, $answer === $yourAnswer];
}

const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";
