<?php
/*
Escreva uma função que reverta as posições dos elementos dentro de um array. Não usar array_reverse do php. exemplo:
input: array(5, 3, 1, 15)
output: array(15, 1, 3, 5)
*/

$input = [5, 3, 1, 15];
$teste = [1, 2, 3, 4];
/**
 * reverses the position of elements in the array
 * @param array $array input
 * @return array $newArray array with inverted elements
 */
function revertArray(array $array): array
{
  $newArray = [];

  for ($x = count($array); $x > 0; $x--) {
    array_push($newArray, $array[$x - 1]);
  }

  return $newArray;
}

print_r(revertArray($input));
echo "<hr>";
print_r(revertArray($teste));
