<?php

namespace BrainGames\Games\PrimeGame;

use function cli\line;
use function cli\prompt;

/**
 * Determine if number is prime or not
 * @param int $num -- number which will be
 * determine is it prime or not
 * @return string -- answer: yes or no
 */
function findPrimeAnswer(int $num): string
{
    if ($num <= 1) {
        return "no";
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return "no";
        }
    }

    return "yes";
}

/**
 * Run main PrimeGame mechanics
 * @return array contains answer, your answer, boolean result
 * between those answers
 */
function isPrime(): array
{
    $num = rand(1, 100);
    line("Question: {$num}");

    $answer = findPrimeAnswer($num);
    $yourAnswer = prompt("Your answer");

    return [$answer, $yourAnswer, $answer === $yourAnswer];
}

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
