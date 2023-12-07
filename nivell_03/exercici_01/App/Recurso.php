<?php


// para cargar las clases 

use Enums\TemaEnum;
use Enums\TipoRecurso;


// cargamos una vez los enums

require_once 'Enums/TemaEnum.php';
require_once 'Enums/TipoRecurso.php';


class Recurso
{

    // Los atributos 

    private string $titulo;
    private TemaEnum $tema; // este atributo tiene que ser uno de los enmums listados
    private string $url;
    private TipoRecurso $tipo; // tiene que ser un recurso listado sino no va a fuincionar 


    //constructor de los atributos
    // TmaEnum $tema obliga a usar una de la enumeraciones igual que Tiporecurso con$tipo depues lo podremos usar al imprimir

    public function __construct(string $titulo, TemaEnum $tema, string $url, TipoRecurso $tipo)
    {
        $this->titulo = $titulo;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipo = $tipo;
    }

    // setters y getters para los valores de los atributos

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getTema(): string
    {
        return 'El tema: ' . $this->tema->value;
    }

    public function setTema(TemaEnum $tema): void
    {
        $this->tema = $tema;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getTipo(): string
    {
        return 'Recurso de tipo: ' . $this->tipo->value;
    }

    public function setTipo(TipoRecurso $tipo): void
    {
        $this->tipo = $tipo;
    }
}
?>