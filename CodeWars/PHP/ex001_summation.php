<?php

/** CHALLENGE SUMMATION - DIFFICULTY - 8 Kyu
 * Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0. Your function only needs to return the result, what is shown between parentheses in the example below is how you reach that result and it's not part of it, see the sample tests.
 */
function summation($n) {
  // Your code here
  $soma = 0;
  for ($count = 1; $count <= $n; $count++) {
    $soma += $count;
  }
  return $soma;
}

$resultado = summation(8);
print_r($resultado);
echo "\n";

// Refactor
function summationRefactor($n) {
  return array_sum(range(1, $n));
}

$result = summationRefactor(8);
print_r($result);
