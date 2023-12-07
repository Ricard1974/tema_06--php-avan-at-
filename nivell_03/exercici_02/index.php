<?php
require 'Coche.php';

$coche = new Coche("Seat", "Gasofa", 99);

// echo $coche->marca;
// echo $coche->tipoCombustible;
// echo $coche->velocidadMaxima;
// printf("Marca %s con motor %s y velocidad %d km/h", $coche->marca, $coche->tipoCombustible, $coche->velocidadMaxima);
var_dump($coche);
// print_r($coche);
// xdebug_var_dump($coche);


?>