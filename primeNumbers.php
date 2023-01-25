<?php
// write a function to check if a number is a prime number

function primeCheck(int $num) : bool
{
    // 1 is not a prime number and we don't want numbers less than 1
    if($num === 1 || $num < 1) return false;

    // 2 is the only even number that is a prime
    if($num === 2) return true;

    // any number that when divided by 2, has remainders is a prime number
    if(($num % 2 !== 0)) return true;

    // all other numbers are not primes
    return false;
}

function echoPrime(int $num) : void
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