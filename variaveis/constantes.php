<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
//pode usar $ na frente

const NOVA_TAXA = 2.5; //outra forma de usar constantes
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . PHP_VERSION;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __FILE__;


