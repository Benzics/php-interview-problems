<?php
// write a program to generate Fibonacci series
// "In mathematics, the Fibonacci numbers, commonly denoted Fₙ,
// form a sequence, the Fibonacci sequence, in which each number
//  is the sum of the two preceding ones. The sequence commonly 
// starts from 0 and 1, although some authors start the sequence
//  from 1 and 1 or sometimes from 1 and 2." - Wikipedia

function fibonacciSeries(int $count): array
{
    $initialSeries = [0, 1];
    
    for ($i = 2; $i < $count; $i++) {
        // we insert a new item to our array
        // this item is the sum of the previous two array values
        $initialSeries[$i] = $initialSeries[$i - 1] + $initialSeries[$i - 2];
    }

    return $initialSeries;
}

print_r(fibonacciSeries(20));
// outputs: 0,1,1,2,3,5,8,13,21,34,55,89,144,233,377,
// 610,987,1597,2584,4181
// github.com/benzics