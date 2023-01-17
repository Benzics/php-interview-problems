<?php
// Write a function: that, given an array A of N integers,
//  returns the smallest positive integer (greater than 0)
//  that does not occur in A.
// For example, given A = [1, 3, 6, 4, 1, 2], the function
//  should return 5.
// Given A = [1, 2, 3], the function should return 4.
// Given A = [−1, −3], the function should return 1.
// Write an efficient algorithm for the following assumptions:
// N is an integer within the range [1..100,000];
// each element of array A is an integer within the range [−1,000,000..1,000,000].

function positiveInteger(array $A) : int
{
    $positiveIntegers = []; // our array of positive integers

    foreach($A as $value) { 
        // we only want positive integers greater than 0
        if($value > 0)  $positiveIntegers[] = $value;
    }
   
    sort($positiveIntegers);  // we sort our array from minimum to max

    $lastValue = 0;
    $i = 1;
    foreach($positiveIntegers as $value) {

        if($lastValue === $value) $i--; //we dont want repetitions

        // we return the first positive integer that is not in our array
        else if($i !== $value) return $i;
        
        $i++;
        $lastValue = $value;
    }

    return $i;
}
// @benzics
echo positiveInteger([1, 2, 3]);
// outputs 4
echo positiveInteger([-1, -3]);
// outputs 1
echo positiveInteger([1, 3, 6, 4, 1, 2]);
// outputs 5