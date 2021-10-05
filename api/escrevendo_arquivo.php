<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteudo\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "adicionar novos conteudos\n"); 
fclose($arquivo);