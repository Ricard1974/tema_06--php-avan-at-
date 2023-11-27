<?php

session_id('test'); // es pot modificar la id per defecte en comptes de un codi generat
session_start();

echo 'Aquest es el ID de la sessio: '.session_id();

// $_SESSION['nom']=$nom;

// echo $_SERVER['SERVER_NAME'];
// header("Location: action_02.php");

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container text-center">
            <div class="row mt-5">
                <div class="col">
                    <form method="post" action="action_02.php">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                        <label for="cog" class="form-label">Cognom</label>
                        <input type="text" class="form-control" name="cog">
                        <input type="submit" class="btn btn-primary mt-3" value="Enviar con POST">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>