<?php
/*
$contador = 1;
$resultado = $contador++;

echo $resultado; 
*/
//---------------------------------------
/*
// Tiene asociatividad izquierda lo que se coloca entre parenteci se ejwcuta primero 
 echo 1 - 2 - 3 - 4;
*/
//----------------------------------------
// Tiene asociatividad derecha
/*
 //$b = 5;
 $c = 10;

$a = $b = $c;

echo $a;
*/
//------------------------------------------

$michis_4_patas = true;
$michis_programan_con_PHP = false;

$resultado = ($michis_4_patas and $michis_programan_con_PHP);
// hay que encerrar entre parentecis para que escoja el resultado que se va mostrar 
var_dump( $resultado );

echo "\n";