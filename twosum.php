<?php
// Write a program that returns an indexed array with
// values that adds up to the target
// Example:
// Input: nums = [2,7,11,15], target = 9
// output: [0,1]
// Explanation: Because nums[0] + nums[1] == 9, we return 0,1

// We can solve this by running a loop inside a loop,
// but this gives us a program with a time complexity of O(n^2)
// which is not so efficient
// below is a solution with a time complexity of O(n)
function twosum(array $nums, int $target) : array
{
    $indexedSums = [];

    foreach($nums as $key => $value)
    {
        // to solve this problem, we create another array
        // with values from the nums array as its keys, and its values as 
        // nums keys
        // we subtract this current value from our target
        // if there is any key in the indexedSums array that is equal to
        // to our expected, the value of that key plus our current value 
        // equals our target
        $expected = $target - $value;

        if(isset($indexedSums[$expected]))
        {
            return [$indexedSums[$expected], $key];
        }
        elseif(!isset($indexedSums[$value])) {
            $indexedSums[$value] = $key;
        }
        
    }

    return ['No solutions found'];
}

echo implode(',', twosum([2,7,11,15], 9));
// output: 0,1
// github.com/benzics
