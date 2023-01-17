<?php
// Write a program to get the factorial of a number
// "In mathematics, the factorial of a non-negative integer n,
//  denoted by n!, is the product of all positive integers 
// less than or equal to n. The factorial of n also equals
// the product of n with the next smaller factorial: 
// For example, The value of 0! is 1, 
// according to the convention for an empty product." - Wikipedia

function factorial($num){
    $res = 1;
  
    // number has to be greater than 1 
    // if not we return $res which is equal to 1
    for(; $num > 1; $num--){
      $res *= $num;
    }
  
    return $res;
  }

echo factorial(3);
// output: 6