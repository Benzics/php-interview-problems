<?php
// Write a program for kadane's algorithm
// Kadane's algorithm is used to find the maximum
// sum of a contiguous subarray.
// Kadane's Algorithm is an iterative dynamic programming algorithm.
// It calculates the maximum sum subarray ending at a particular 
// position by using the maximum sum subarray ending at the previous position.
// Example: input: [-2,-3, 4, -1, -2, 1, 5, -3] 
// expected output: 7, because 4 + (-1) + (-2) + 1 + (5) = 7

function kadane(array $items) : int
{
    $maxSoFar = 0;
    $currentSum = 0;
    $i = 0;

    foreach($items as $value)
    {
        // maximum sum subarray ending here
        $currentSum += $value;

        // if sum here is less than 0, we set sum here to 0
        // we want to make sure our sum here is always positive
        if($currentSum < 0) $currentSum = 0;

        // our sum so far should always be the maximum
        if($currentSum > $maxSoFar) $maxSoFar = $currentSum;

        $i++;
    }

    return $maxSoFar;
}

echo kadane([-2,-3, 4, -1, -2, 1, 5, -3]);
// output: 7
// github.com/benzics