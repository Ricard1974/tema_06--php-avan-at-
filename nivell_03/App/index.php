<?php

use Enums\TipoRecurso;
use Enums\TemaEnum;

require_once 'Recurso.php';


$recurso = new Recurso('El titulo del recurso'.'</br>',TemaEnum::PHP, '</br>https://ladireccionwebquesea.com</br>', TipoRecurso::ARTICULOWEB);

echo $recurso->getTitulo(); 
echo $recurso->getTema(); 
echo $recurso->getUrl();
echo $recurso->getTipo(); 
// print_r($recurso);
var_dump($recurso);