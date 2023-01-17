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
    if(count($A) < 2) return 1;

    // our array of positive integers
    $positiveIntegers = [];

    foreach($A as $value) { 
        // we only want positive integers greater than 0
        if($value < 1) continue;

        // save this number to our array
        $positiveIntegers[] = $value;
    }

    // we remove duplicate numbers from our array
    array_unique($positiveIntegers);

    // we sort our array from minimum to max
    sort($positiveIntegers);

    foreach($positiveIntegers as $value) {

        // if current number + 1 is not in this array
        // then this number is our minimum positive integer not in A
        if(!array_search($value + 1, $positiveIntegers)) {
            return $value + 1;
        }
    }

    return 1;
}
// @benzics