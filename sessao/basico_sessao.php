<div class="titulo">Básico Sessão</div>

<?php
session_start();
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
  $_SESSION['nome'] = 'Gabriel';
}
?>
<p>
  <a href="sessao/basico_sessao_alterar.php">
    Alterar Sessão
  </a>
</p>