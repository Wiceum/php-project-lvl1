<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;


function engineGreeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    return $name;

}//end engineGreeting()


function printGameEssence(string $essence)
{
    line($essence);

}//end printGameEssence()


function engineCycle($name, callable $rule)
{
    for ($i = 0; $i < 3; $i++) {
        $rightAnswer = $rule();

        $answer = prompt('Your answer');

        if ($rightAnswer === $answer) {
            line('Correct!');
            if ($i === 2) {
                line('Congratulations, '.$name.'!');
            }
        }

        if ($rightAnswer !== $answer) {
            line($answer.' is wrong answer ;(. Correct answer was \''.$rightAnswer.'\'.');
            line("Let's try again, %s!", $name);
            break;
        }
    }//end for

}//end engineCycle()


function getGCDBetween($a, $b)
{
    while ($b !== 0) {
        $m = ($a % $b);
        $a = $b;
        $b = $m;
    } return $a;

}//end getGCDBetween()


function is_prime($n)
{
    for ($x = 2; $x <= sqrt($n); $x++) {
        if (($n % $x) === 0) {
            return false;
        }
    }

    return true;

}//end is_prime()
