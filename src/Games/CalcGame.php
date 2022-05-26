<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;

const OPS = ["-", "+", "*"];

/**
 * Evaluate giving expression and return result int or null
 * @param int $num1 -- number 1
 * @param int $num2 -- number 2
 * @param string $op -- operation for expression
 * @return ?int -- return int result of expression or null
 */
function evalExpression(int $num1, int $num2, string $op)
{
    switch ($op) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        default:
            return null;
    }
}

/**
 * Run main CalcGame mechanics
 * @return array contains answer, your answer, boolean result
 * between those answers
 */
function isEqualCalc(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $op = OPS[rand(0, 2)];

    line("Question: {$num1} {$op} {$num2}");

    $answer = evalExpression($num1, $num2, $op);
    $yourAnswer = (int)prompt("Your answer");

    return [$answer, $yourAnswer, $answer === $yourAnswer];
}

const GAME_DESCRIPTION = "What is the result of the expression?";
