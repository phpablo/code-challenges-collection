<?php
class Solução {

  function comparaPrefixo($palavras) {
    if (empty($palavras)) return '';

    $prefixo = '';

    for ($i = 0; $i < strlen($palavras[0]); $i++) {
      $letra = $palavras[0][$i];

      foreach ($palavras as $palavra) {
        if (!isset($palavra[$i]) || $palavra[$i] !== $letra) {
          return $prefixo;
        }
      }

      $prefixo .= $letra;
    }
  }
}

// ============================================ 
$entrada = ["casa", "cabelo", "caminho"];

$solucao = new Solução();
$resultado = $solucao->comparaPrefixo($entrada);
echo $resultado . PHP_EOL;
