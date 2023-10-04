<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600); //para eliminar los números enteros hay que utilizar (INt)
$segundos = (int) ($segundos % 3600);// para que no salgan los decimales hay que encerrar entre parentices 
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos.";

echo "\n";

