<?php

// $numArray = [1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]
// write a code to find number with less occurence.

function lessOccurence(array $items) : int
{
    $itemCount = array_count_values($items);

    asort($itemCount); 

    return array_key_first($itemCount);
}

echo lessOccurence([1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]);