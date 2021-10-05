<div class="titulo">Include x Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente.. <br>';
include('arquivo_inexistente.php');

echo 'Usando include com arquivo inexistente.. <br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo...<br>';