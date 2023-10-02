<?php

$michis_felinos =  true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

// And

# var_dump($michis_felinos && $michis_4_patas);


// Or
# var_dump($michis_4_patas || $michis_vuelan);

// Not
# var_dump( !$michis_4_patas );


// Experimentos que te va a hacer decir waaaaaaaaaaaaat

$resultado = $michis_4_patas and $michis_programan_con_PHP;

var_dump( $resultado );

echo "\n";

//suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
// cual es el resultado?
//$resultadoo = $es_un_michi_grande && $le_gusta_comer; //true
//$resultadoo = $es_un_michi_grande || $sabe_volar; //True
//$resultadoo = $sabe_volar || $tiene_2_patas; //false
//$resultadoo = $sabe_volar || $tiene_2_patas; //false
//$resultadoo = !$le_gusta_comer; // false
$resultadoo = !$le_gusta_comer || $es_un_michi_grande; // true

var_dump( $resultadoo);