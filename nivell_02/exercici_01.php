Crea una classe que contingui els mètodes getFile() i getDir()
que torni el path sencer i el directori del fitxer utilitzant constants
màgiques.

<?php

class getFile
{
    public function infoFitcher()
    {
        echo '<br/>' . 'Path al fichero' . __FILE__ . ' y la clase es '.get_class($this) , "<br/>";
    }
}
class getDir
{
    public function directorio()
    {
        echo 'Directorio al fichero' . __DIR__ .'==========='. __LINE__.'====== y la clase es '.get_class($this) , "<br/> Funcion= ".__FUNCTION__.' Metodo='.__METHOD__		;
    }
}

class todo{
    public function todito(){
        echo ''.__DIR__.'<br/>';
        echo ''.__LINE__.'<br/>';
        echo ''.__FILE__.'<br/>';
        echo ''.__FUNCTION__.'<br/>';
        echo ''.__CLASS__.'<br/>';
        echo ''.__METHOD__.'<br/>';
    }
}

$obj1 = new getFile;
$obj2 = new getDir;
$obj3 = new todo;
$obj1->infoFitcher();
$obj2->directorio();
$obj3->todito();
?>