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
    $test = new EtudiantModele;
    session_start();
            $_SESSION['user_id']="4";
            $_SESSION['user_type']="Tuteur";
    echo (($test->getCountByStatutByIdTuteur("Accepté")[0]->nb_eleve));
    ?></h1>
</body>
</html>