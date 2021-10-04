<?php
session_start();
print_r($_SESSION);
?>

<p>
  <b>Nome: </b> <? $_SESSION['nome'] ?>
</p>

<?php
$_SESSION['nome'] = 'Felipe';
?>

<p>
  <a href='basico.php'>Voltar</a>
</p>