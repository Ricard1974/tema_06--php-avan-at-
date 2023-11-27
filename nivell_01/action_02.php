
<?php
session_start();

$_SESSION['nom'] = $_POST['nom']; // converteixo la info que arriba amb post a la variable de sessio
$_SESSION['cog'] = $_POST['cog']; // converteixo la info que arriba amb post a la variable de sessio
echo $_SERVER['SERVER_NAME'] . PHP_EOL;
echo '' . $_SESSION['nom'] . PHP_EOL;
echo '' . $_SESSION['cog'] . PHP_EOL;


echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>
