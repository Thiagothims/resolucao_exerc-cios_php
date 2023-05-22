<?php
/*
Escreva uma função que encontre o elemento que aparece mais vezes em um array, exemplo:
input: array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6)
output: 5
*/

$input = [1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6];

/**
 * identify which number is repeated the most in an array
 * @param array $array input
 * @return int $maxArray most repeated value
 */
function countRepeatedValue(array $array): int
{
  $array = (array_count_values($array));
  $maxArray = max($array);

  foreach ($array as $key => $val) {
    if ($val == $maxArray) {
      echo $key;
    }
  }
  return $maxArray;
}

countRepeatedValue($input);
