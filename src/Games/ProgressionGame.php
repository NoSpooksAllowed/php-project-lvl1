<?php

namespace BrainGames\Games\ProgressionGame;

use function cli\prompt;

/**
 * Generate array of integer progression
 * @return Integer[] -- array of integers
 */
function generateProgression(): array
{
    $begin = rand(2, 20);
    $step = rand(2, 5);
    $length = rand(5, 15);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $begin;
        $begin += $step;
    }

    return $progression;
}

/**
 * Print progression of integers and hide one num with .. symbols
 * @param Integer[] $progression -- array of numbers
 * @param int $hideNum -- number what need to hide when printing
 * @return void
 */
function printProgression(array $progression, int $hideNum): void
{
    for ($i = 0; $i < count($progression); $i++) {
        if ($i === $hideNum) {
            print(".. ");
        } elseif (count($progression) - 1 === $i) {
            print("{$progression[$i]}");
        } else {
            print("{$progression[$i]} ");
        }
    }

    print("\n");
}

function isRightNumInProgression(): array
{
    $progression = generateProgression();
    $hideNum = rand(0, count($progression) - 1);
    print("Question: ");
    printProgression($progression, $hideNum);

    $answer = $progression[$hideNum];

    $yourAnswer = (int)prompt("Your answer");

    return [$answer, $yourAnswer, $answer === $yourAnswer];
}

const GAME_DESCRIPTION = "What number is missing in the progression?";
