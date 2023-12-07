<?php



// enumeracion de tipos de recursos que se van a usar
namespace Enums;

enum TipoRecurso: string
{
    case FICHERO = 'Fichero';
    case ARTICULOWEB = 'Dirección web';
    case VIDEO = 'Vídeo';
}