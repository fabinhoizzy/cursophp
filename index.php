<?php
session_start();

if($_COOKIE['usuario']) {
  $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilo.css">
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
  </header>


  <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href="logout.php" class="vermelho">Sair</a>
  </nav>

  <main class="principal">
    <div class="conteudo">
      <nav class="modulos">

        <div class="modulo verde">
          <h3>1. Básico</h3>
          <ul>
            <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
            <li><a href="exercicio.php?dir=basico&file=html">Integração HTML </a></li>
            <li><a href="exercicio.php?dir=basico&file=css">Integração CSS </a></li>
            <li><a href="exercicio.php?dir=basico&file=comentario">Comentários PHP </a></li>
            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
          </ul>
        </div>

        <div class="modulo vermelho">
          <h3>2. Tipos</h3>
          <ul>
            <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
            <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
            <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>
            <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio precedência</a></li>
            <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
            <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
            <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
            <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>

          </ul>
        </div>

        <div class="modulo azul">
          <h3>3. Variáveis</h3>
          <ul>
            <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=atribuicao">Atribuições</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">Variáveis Variáveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor x Referência</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
          </ul>
        </div>

        <div class="modulo roxo">
          <h3>4. Estruturas de Controles</h3>
          <ul>
            <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
            <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Op. Relacionais</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
            <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Op. Logicos</a></li>
            <li><a href="exercicio.php?dir=controle&file=operadores_ternario">Operador Ternario</a></li>
            <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>

          </ul>
        </div>

        <div class="modulo laranja">
          <h3>5. Array</h3>
          <ul>
            <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
            <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
            <li><a href="exercicio.php?dir=array&file=comparacao">Comparações</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
            <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
            <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
            <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>

          </ul>
        </div>

        <div class="modulo verde-escuro">
          <h3>6. Controle</h3>
          <ul>
            <li><a href="exercicio.php?dir=repeticoes&file=for">Laço For</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=while">while</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break/Continue</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_impressao">Desafio Impressão</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela_2">Desafio Tabela 2</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela">Desafio Tabela</a></li>
          </ul>
        </div>

        <div class="modulo vermelho-escuro">
          <h3>7. Funções</h3>
          <ul>
            <li><a href="exercicio.php?dir=funcoes&file=anonimas">Funções anonimas</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumentos Padrão</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos de Retorno</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos de Variáveis</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closure e Callable</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=desafio_recursao">Desafio Recursão</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=escopo">Escopo</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map e Filter</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=palindromo">Palindromo</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Funções</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>

        </div>

        <div class="modulo azul-escuro">
          <h3>8. Paradigmas O.O</h3>
          <ul>
            <li><a href="exercicio.php?dir=classes_objetos&file=classe">Classe</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor e Destrutor</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros Estáticos</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=abstrata">Abstrata</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=traits_01">traits #1</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=traits_02">traits #2</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=desafio_erros">Desafio Erros</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=final">Final</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=magic_methods">Métodos Magicos</a></li>
            <li><a href="exercicio.php?dir=classes_objetos&file=polimorfismo">Polimorfismo</a></li>

        </div>

        <div class="modulo roxo-escuro">
          <h3>9. Includes</h3>
          <ul>
            <li><a href="exercicio.php?dir=includes&file=include">Includes</a></li>
            <li><a href="exercicio.php?dir=includes&file=include_funcao">Include Funcão</a></li>
            <li><a href="exercicio.php?dir=includes&file=include_require">Include x Require</a></li>
            <li><a href="exercicio.php?dir=includes&file=require_return">Require x Return</a></li>
            <li><a href="exercicio.php?dir=includes&file=include_once">Include Once</a></li>
            <li><a href="exercicio.php?dir=includes&file=desafio">Desafio</a></li>


        </div>

        <div class="modulo laranja-escuro">
          <h3>10. Namespace</h3>
          <ul>
            <li><a href="exercicio.php?dir=namespace&file=basico">Básico</a></li>
            <li><a href="exercicio.php?dir=namespace&file=sub_namespace">Sub Namespace</a></li>
            <li><a href="exercicio.php?dir=namespace&file=use_as">Use As</a></li>


        </div>

        <div class="modulo verde">
          <h3>11. Tratamento de Erros</h3>
          <ul>
            <li><a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try Catch</a></li>
            <li><a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Error Personalizados</a></li>
            <li><a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">Desafio intdiv</a></li>
            <li><a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">Gerenciador de Error</a></li>


        </div>

        <div class="modulo vermelho">
          <h3>12. Sessão</h3>
          <ul>
            <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Básico Sessão</a></li>


        </div>

      </nav>
    </div>
  </main>


  <footer class="rodape">
    izzy@corp <?= date('Y'); ?>
  </footer>
</body>

</html>