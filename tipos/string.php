<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("eu também");
echo '<br>';

//concatenação
echo "Nós também".' somos';
echo "<br>";
print("Também existe a funcão print");

//funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas letras?');
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7 ,6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');