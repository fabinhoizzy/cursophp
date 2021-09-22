<?php
echo 'Carregando: include_arquivos<br>';

$variavel = 'Estou definita';

if(!function_exists('soma')) {
  function soma($a, $b) {
    return $a + $b;
}
}