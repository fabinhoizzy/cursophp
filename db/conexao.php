<?php
//Esse tipo de conexao não pode ser usada em ambientes reais
function novaConexao($banco = 'curso_php') {
  $servidor = '127.0.0.1';
  $usuario = 'root';
  $senha = '';

  $conexao = new mysqli($servidor, $usuario, $senha, $banco);

  if($conexao->connect_error) {
    die('Erro:'. $conexao->connect_error);
  }

  return $conexao;

}