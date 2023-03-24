<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    oui
    <h1><?php require(__DIR__."/src/modele/OffreModele.php");
    $offre=new OffreModele();
    print_r($offre->getCompetencesById(2)[0]->id_localite);
    ?></h1>
</body>
</html>