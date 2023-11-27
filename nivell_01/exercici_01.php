<!-- Crea un formulari HTML amb els camps que vulguis (almenys un nom o username).
El formulari ha de tenir com a action un document PHP.
El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari
mitjançant variables superglobals.

 -->


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container text-center">

            <div class="row mt-5">
                <div class="col">
                    <form method="get" action="action_01.php">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                        <label for="cognom" class="form-label">Cognom</label>
                        <input type="text" class="form-control" name="cognom">
                        <input type="submit" class="btn btn-primary mt-3" value="Enviar con GET">
                    </form>
                </div>
            </div>

            <!-- <div class="row mt-5">
                <div class="col">
                    <form method="post" action="action_01.php">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                        <label for="cognom" class="form-label">Cognom</label>
                        <input type="text" class="form-control" name="cognom">
                        <input type="submit" class="btn btn-primary mt-3" value="Enviar con POST">
                    </form>
                </div>
            </div> -->

        </div>

</body>

</html>