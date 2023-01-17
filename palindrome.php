<?php
// Write a function to check if a word is a Palindrome
// A Palindrome is a word that is spelt the same backwards
// pop is a Palindrome 
// man is not a Palindrome

function isPalindrome(string $word) : bool
{
    // we reverse this word
    $newWord = strrev($word);

    // we then compare if the reversed word is same as the initial word
    // if the same we return true, else false
    return ($newWord === $word) ? true : false;
}
// @benzics

function echoPalindrome(string $word) : void
{
    echo isPalindrome($word) ? "$word is a palindrome \n" : "$word is not a palindrome \n";
}

echoPalindrome('man');
echoPalindrome('mom');
echoPalindrome('pop');
echoPalindrome('light');
echoPalindrome('tent');