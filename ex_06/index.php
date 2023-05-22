<?php
/*
Crie uma função que mascare números de um cartão de crédito.
Requisitos:
* Não mascare o primeiro dígito e os últimos quatro dígitos;
* Não mascare caracteres sem dígitos;
* Não mascarar se a entrada for menor que 6 (quantidade de caracteres);
* Caso nada tenha sido emputado, retorne vazio.
*/

$numberCreditCard1 = "5688 5445 3284 5201";
$numberCreditCard2 = "5688 5445 3284";
$numberCreditCard3 = "5688 544";
$numberCreditCard4 = " ";

/**
 * credit card number marker, displaying only the first and last four digits
 * @param string $cardNumber Credit Card Number
 * @return string $maskedNumber credit card number with masked numbers
 */
function maskCreditCard(string $cardNumber): string
{
  $cardNumber = str_replace(" ", "", $cardNumber);

  $middleNumber = substr($cardNumber, 1, -4);

  if (strlen($cardNumber) <= 6) {
    echo $cardNumber;
  } elseif (strlen($cardNumber) > 6) {
    for ($y = 0; $y < strlen($cardNumber); $y++) {
      $maskedNumber = str_replace($middleNumber, str_repeat(" * ", strlen($middleNumber)), $cardNumber);
    }
    echo $maskedNumber;
  }
  return " ";
}

maskCreditCard($numberCreditCard1);
echo "<hr>";
maskCreditCard($numberCreditCard2);
echo "<hr>";
maskCreditCard($numberCreditCard3);
echo "<hr>";
maskCreditCard($numberCreditCard4);
echo "<hr>";
