<?php
// write a function to check if a number is a prime number
function primeCheck(int $num)
{
    if($num === 1 || $num < 1) return false;
    if($num === 2) return true;
    if(($num % 2 !== 0)) return true;

    return false;
}

function echoPrime(int $num)
{
    echo primeCheck($num) ? "$num is a prime number. \n" : "$num is not a prime number \n";
}

echoPrime(1);
echoPrime(2);
echoPrime(3);
echoPrime(4);
echoPrime(5);
echoPrime(6);
echoPrime(7);
echoPrime(8);
echoPrime(9);
echoPrime(10);
echoPrime(11);
echoPrime(12);