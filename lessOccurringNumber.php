<?php
// $numArray = [1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]
// write a code to find the number with less occurrences.

function lessOccurrence(array $items) : int
{
    // counts the occurrencies of numbers in this array
    // and returns them in an indexed array of 
    // key(the number) => value (number of occurrences)
    $itemCount = array_count_values($items);

    // sort them from lowest to highest based on the key
    asort($itemCount); 

    // returns the first index which is the minimum
    return array_key_first($itemCount);
}
// @benzics
echo lessOccurrence([1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]);