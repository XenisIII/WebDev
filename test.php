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
    $yesterday=date("y-m-").(intval(date('d'))-1);
    $statement="date_mise_en_ligne=$yesterday";
    print_r($statement);
    $arrayOffer=$offre->getAllOfferScale($statement);
    print_r($arrayOffer);
    ?></h1>
</body>
</html>