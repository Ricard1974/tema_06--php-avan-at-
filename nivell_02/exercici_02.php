<?php


// class Coche
// {
//     public $marca;
//     public $modelo;

//     public function __construct($marca, $modelo)
//     {
//         $this->marca = $marca;
//         $this->modelo = $modelo;

//         echo "Creado coche: $marca, modelo $modelo";
//     }
// }

// $coche = new Coche("Seat", "Ibiza");




class Coche2
{
    public $marca;
    public $modelo;
    public $velocidad;

    public function __set($nombrePropiedad, $valor)
    {
        if ($nombrePropiedad == "velocidad") {
            if (!is_numeric($valor)) {
                echo "Tienes que poner un numero";
            } else {
                $this->velocidad = $valor;
            }
        }
    }

    public function __unset($nombrePropiedad)
    {
        echo "La propiedad $nombrePropiedad unset";
        $this->$nombrePropiedad = null;
    }
}

$coche = new Coche2("Seat", "Panda");

$coche->velocidad = "a ochenta"; // fallo al no ser numnerico
$coche->velocidad = 80; // ok

// Imprime el valor de la propiedad velocidad antes de desasignarla
echo $coche->velocidad.'</br>';
var_dump($coche).'</br>';
unset($coche->velocidad);
var_dump($coche).'</br>';

?>