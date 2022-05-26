<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Greet user
 *
 * @return string
 */
function greeting(): string
{
    $name = prompt("May I have your name", false, "? ");
    line("Hello, %s!", $name);

    return $name;
}
