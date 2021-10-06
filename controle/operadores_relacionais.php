<div class="titulo">Op. Relacionais</div>

<?php 
var_dump(1 == 1); //true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); //true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); //true
var_dump(111 === '111'); //false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); //true

echo "<p> Relacionais no If/Else</p><hr>";
$idade = 25;
if($idade < 18) {
  echo "Menor de idade = $idade anos<br>";
} else if($idade <= 65) {
  echo "Adulto = $idade anos <br>";
} else {
  echo "terceira idade = $idade anos ";
} 

echo "<p>Spaceship</p><hr>";
var_dump(500 <=> 3); //1
var_dump(50 <=> 50); //0
var_dump(5 <=> 50); //-1

