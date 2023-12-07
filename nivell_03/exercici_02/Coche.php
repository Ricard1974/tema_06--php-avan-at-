<?php

trait Turbo
{
    public function boost():void
    {
        echo 'Turbo iniciado.';
    }
}

class Coche
{
    use Turbo;

    public $marca;
    public $tipoCombustible;
    public $velocidadMaxima;

    public function __construct($marca, $tipoCombustible, $velocidadMaxima)
    {
        $this->marca = $marca;
        $this->tipoCombustible = $tipoCombustible;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->boost(); // usar el trait  Turbo boooooostt
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function getTipoCombustible():string
    {
        return $this->tipoCombustible;
    }

    public function setTipoCombustible($tipoCombustible): void
    {
        $this->tipoCombustible = $tipoCombustible;
    }

    public function getVelocidadMaxima() :int
    {
        return $this->velocidadMaxima;
    }

    public function setVelocidadMaxima($velocidadMaxima): void
    {
        $this->velocidadMaxima = $velocidadMaxima;
    }
}
?>