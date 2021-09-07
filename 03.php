<?php
/*
Arias Mariano

Aplicaci�n No 3 (Obtener el valor del medio)
Dadas tres variables num�ricas de tipo entero $a, $b y $c realizar una aplicaci�n que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje ?No hay valor del medio?*/

echo "Ejercicio N° 3"."<br>";

$a = random_int(1,10);
$b = random_int(1,10);
$c = random_int(1,10);

$flag=true;

echo "Numero A: ". $a."</br>";
echo "Numero B: ".$b."</br>";
echo "Numero C: ".$c."</br>";

if ((($a == $b) || ($b == $c)) || ($a == $c)) {
  echo "No hay valor del medio.";
} else {
  if ((($a > $b) && ($a < $c)) || (($a < $b) && ($a > $c))) {
    echo "El valor del medio es " . $a;
    $flag = false;
  }
  if ((($b > $a) && ($b < $c)) || (($b < $a) && ($b > $c))) {
    echo "El valor del medio es " . $b;
    $flag = false;
  }
  if ($flag) {
    echo "El valor del medio es " . $c;
  }
}