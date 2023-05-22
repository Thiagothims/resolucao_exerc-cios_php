<?php
/*
Escreva uma função que coloque todos os zeros de um array no final, exemplo;
input: array(0, 2, 3, 4, 6, 7, 10)
output: Array([0]=>2, [1]=>3, [2]=>4 ,[3]=>6 ,[4]=>7 ,[5]=>10 ,[6]=>0 )
*/

$input = [0, 2, 3, 4, 6, 7, 10];

/**
 * organize an array and put the number zero at the end
 * @param array $list list of numbers
 * @return array $list list of numbers sorted with zeros at the end
 */
function arrangeZeroLast(array $list): array
{
  $aux = 0;
  for ($i = 0; $i < count($list); $i++) {
    for ($j = 0; $j < count($list); $j++) {
      if ($list[$j] == 0) {
        $aux = $list[$j];
        $list[$j] = $list[$i];
        $list[$i] = $aux;
      }
    }
  }
  return $list;
}

print_r(arrangeZeroLast($input));
