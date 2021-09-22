<div class="titulo">Abstrata</div>

<?php
abstract class Abstrata {
  abstract public function metodo1();
  abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
  public function metodo1() {
    echo "Executando metodo 1<br>";
  }

  abstract public function metodo3();

}

class Concreta extends FilhaAbstrata {
  public function metodo1()
  {
    echo "Executando Método 1 extendido <br>";
  }
  public function metodo2($parametro) {
    echo "executando metodo2, com parametro $parametro <br>";
  }
  public function metodo3() {
    echo "executando metodo3 <br>";
  }
}

$c = new Concreta();
$c->metodo1();
$c->metodo2('externo');
$c->metodo3();

echo "Fim!";