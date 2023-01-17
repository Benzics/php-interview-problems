<?php
// Given an unsorted array of integers nums, return the length
// of the longest consecutive elements sequence.
// Example 1: Input: nums = [100,4,200,1,3,2] Output: 4
// Explanation: The longest consecutive elements sequence is 
// [1, 2, 3, 4]. Therefore its length is 4.

function longestSequence(array $nums) : int
{
    // remove duplicates from this array and sort it
    $nums = array_unique($nums);
    sort($nums);

    $newNums = [];

    foreach($nums as $key => $value) {
        // if the next number in this sequence is not +1
        // of this current number return
        $newNums[] = $value;
        if(isset($nums[$key + 1]) && $nums[$key + 1] !== ($value + 1)) break;
    }

    return count($newNums);
}
echo longestSequence([1, 2, 3, 4]);
// output: 4
// github.com/benzics