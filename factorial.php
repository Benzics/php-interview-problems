<?php
// Write a program to get the factorial of a number
// "In mathematics, the factorial of a non-negative integer n,
//  denoted by n!, is the product of all positive integers 
// less than or equal to n. The factorial of n also equals
// the product of n with the next smaller factorial: 
// For example, The value of 0! is 1, 
// according to the convention for an empty product." - Wikipedia

function factorial(int $num) : int
{
    $res = 1;
  
    // $num has to be greater than 1 before we multiply numbers
    // less than or equal to $num
    // if not we return $res which is equal to 1
    while($num > 1){
      $res *= $num;

      $num--;
    }
  
    return $res;
  }

echo factorial(3);
// output: 6
// github.com/benzics