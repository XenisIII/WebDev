<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php require(__DIR__."/src/modele/EtudiantModele.php");
    $a = new EtudiantModele;
    print_r($a->getAllRechercheByIdTuteur(5));
    ?></h1>
</body>
</html>

