<?php 
/*
Escreva uma função que retorne a quantidade de caracteres da última palavra em uma frase, exemplo:
input: "Estou praticando exercícios"
output: 10
*/

$input = "Estou praticando exercícios";

/**
 * count number of characters in the last word
 * @param string $string input
 * @return int $lastWord number of characters in the last word
 */
function lastWordCount(string $string) : int
{
  $array = explode(" ", $string);
  $lastWord = mb_strlen(end($array));
  return $lastWord;
} 

echo lastWordCount($input);
