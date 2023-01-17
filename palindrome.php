<?php
// function to check if a word is a palindrome
// a palindrome is a word that is spelt the same backwards
// pop is a palindrome 
// man is not a palindrome

function isPalindrome(string $word)
{
    $newWord = strrev($word);

    return ($newWord === $word) ? true : false;
}

function echoPalindrome(string $word)
{
    echo isPalindrome($word) ? "$word is a palindrome \n" : "$word is not a palindrome \n";
}

echoPalindrome('man');
echoPalindrome('mom');
echoPalindrome('pop');
echoPalindrome('light');
echoPalindrome('tent');