<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Greet user
 *
 * @return void
 */
function greeting(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
