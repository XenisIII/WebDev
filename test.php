<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php require(__DIR__."/src/modele/StagesModele.php");
    echo $this->db->getAllById(2)->nom_offre;
    ?></h1>
</body>
</html>