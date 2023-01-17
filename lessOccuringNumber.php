<?php

// $numArray = [1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]
// write a code to find number with less occurence.
// time complexity: O(n)

function lessOccurence(array $items) : int
{
    sort($items);

    $itemCount = [];

    for($i = 0; $i < count($items); $i++) {

        if(!isset($itemCount[$items[$i]])) $itemCount[$items[$i]] = 1;

        if(isset($items[$i + 1]) && $items[$i + 1] === $items[$i]) {
            $itemCount[$items[$i]]++;
            continue;
        }

    }

    $min = array_keys($itemCount, min($itemCount));

    return $min[0];
}

echo lessOccurence([1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7]);