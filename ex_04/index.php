<?php
/*
Escreva uma função que retorne o número que aparece o número ímpar de vezes em um array, exemplo:
input: array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4)
output: 2
*/

$input = [4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4];
$input2 = [1, 2, 2, 3, 3, 3, 4, 4, 11, 13];

/**
 * finds in an array the numbers that are repeated an odd number of times
 * @param array $array input
 * @return int $key returns the value that is repeated an odd number of times
 */
function countOdds(array $array): int
{
  $array = array_count_values($array);

  foreach ($array as $key => $value) {
    if (($value % 2 == 1) && ($value == $value)) {
      echo $key . "  ";
    }
  }
  return $key;
}

countOdds($input);
echo "<br>";
countOdds($input2);
