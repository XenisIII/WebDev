<?php
require(__DIR__.'/src/modele/EtudiantModele.php');
    $tmp=new EtudiantModele();
    print_r($tmp->getFavById(11));
?>