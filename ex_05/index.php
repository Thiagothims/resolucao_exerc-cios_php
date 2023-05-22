<?php
/*
Escreva uma função que retorne true caso uma palavra seja palindromo (palavra que lendo de trás para frente possui o mesmo significado, exemplo: osso).
*/

$input = "osso";
$input2 = "carne";

/**
 * detects if the inputted word is a palindrome
 * @param string parsed word
 * @return string true or false
 */
function detectPalindrome(string $string): string
{
  $string = mb_strtolower($string);
  $compare = mb_strtolower(strrev($string));

  echo  "A palavra '$string' é palíndromo? ";
  return $string == $compare ? 'true' : 'false';
}

echo detectPalindrome($input);
echo "<br>";
echo detectPalindrome($input2);
?>
