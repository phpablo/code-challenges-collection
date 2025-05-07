class Solution {

/**
* @param String $s
* @return Integer
*/
function romanToInt($s) {
$valores = [
'I' => 1,
'V' => 5,
'X' => 10,
'L' => 50,
'C' => 100,
'D' => 500,
'M' => 1000
];

$total = 0;

for($i = 0 ; $i < strlen($s); $i++) { $atual=$valores[$s[$i]]; $proximo=isset($valores[$s[$i+1]]) ? $valores[$s[$i+1]] :
  0; if($atual < $proximo) { $total -=$atual; }else { $total +=$atual; } } return $total; } } $solucao=new Solution();
  // Testes Automatizados $testes=[ 'III'=> 3,
  'LVIII' => 58,
  'XL' => 40,
  'CDXLIV' => 444
  ];

  foreach($testes as $romano=>$esperado) {
  $resultado = $solucao->romanToInt($romano);
  echo "Input: $romano | Esperado: $esperado | Resultado: $resultado".PHP_EOL;
  }