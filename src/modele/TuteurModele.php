<?php


require_once(__DIR__."/../lib/database.php");

class TuteurModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }

    public function getAllClasseByTuteur(){
        $statement="SELECT * FROM ((Utilisateur u INNER JOIN Tuteur t on u.id_utilisateur = t.id_utilisateur )
        INNER JOIN Pilote p on t.id_tuteur = p.id_tuteur)
        INNER JOIN Classe c on p.id_classe = c.id_classe
        WHERE t.id_utilisateur = :sess;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }

}

    ?>