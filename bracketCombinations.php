<?php 
// Have the function BracketCombinations(num) read num which
// will be an integer greater than or equal to zero, and return
// the number of valid combinations that can be formed with num
// pairs of parentheses. For example, if the input is 3, then the
//  possible combinations of 3 pairs of parenthesis, namely: ()()(),
//  are ()()(), ()(()), (())(), ((())), and (()()). 
// There are 5 total combinations when the input is 3, 
// so your program should return 5.

// We can use the Catalan formula: (2n!) / (n+1)! n! 
// to solve this problem
function BracketCombinations(int $num): int
{

    // we wrote a factorial function earlier
  return (factorial($num * 2)) / (factorial($num + 1) * factorial($num)) ;

}

echo BracketCombinations(3);
// output: 5
// github.com/benzics

function factorial($num){
  $res = 1;

  for(; $num > 1; $num--){
    $res *= $num;
  }

  return $res;
}