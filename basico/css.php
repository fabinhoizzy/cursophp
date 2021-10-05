<div class="titulo">Integração CSS</div>

<h1 azul center>
  <?php
  #Misturando HTML e PHP
  echo 'Olá ';

  echo ' Mundo!';

  ?>
</h1>

<?= "<div azul center>Outra forma de me 'expressesar'!</div>" ?>
<br>
<div azul center><button><?= "Legal" ?></button></div>

<style>
  button {
    padding: 5px 20px;
    background-color: #4286f4;
    color: #EEE;
    font-weight: bold;
    border-radius: 10px;
  }

  [center] {
    display: flex;
    justify-content: center;
  }

  [azul] {
    color: #4286f4;
  }

  [dobro] {
    font-size: 2rem;
  }
</style>