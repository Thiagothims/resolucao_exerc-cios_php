<?php
/*
Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um 
array, resulte na soma 6:
Não deve ser utilizado loops para resolver esse exercício.
array(1, 8, 13, 11, 1, 3, -2, -6, 5
*/

$input = [1, 8, 13, 11, 1, 3, -2, -6, 5];
$teste = [0];
$teste2 = [2, 3];

/**
 * finds in an array the elements that added to them or to another result in the sum 6.
 * @param array $array user input
 * @return string $detectedSum array converted to string that presents the elements
 */
function verifySumsix(array $array): string
{
  $detectedSum = [];

  foreach ($array as $num) {
    $diff = 6 - $num;
    if (in_array($diff, $array)) {
      if (!in_array($num, $detectedSum)) {
        $detectedSum[] = $num;
      }
      if (!in_array($diff, $detectedSum)) {
        $detectedSum[] = $diff;
      }
    }
  }

  if (count($detectedSum) > 0) {
    echo "Números que somados a eles mesmos ou a outro e resultam 6: ";
    return implode(", ", $detectedSum);
  } else {
    return "Não é possível encontrar dois números que somados resultem em 6.";
  }
}

echo verifySumsix($input);
echo "<hr>";
echo verifySumsix($teste);
echo "<hr>";
echo verifySumsix($teste2);
