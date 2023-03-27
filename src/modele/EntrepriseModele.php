<?php
require(__DIR__."/../lib/database.php");
class EntrepriseModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }

    public function getOffres($id){
        $statement = "SELECT * FROM Entreprise natural join Offre natural join Localite WHERE id_entreprise = :id ;";
        $user = $this->db->executeAll($statement, array(':id'=>$id));
        return $user;
    }

    public function getEntreprise($id){
        $statement = "SELECT * FROM Entreprise WHERE id_entreprise = :id ;";
        $user = $this->db->execute($statement, array(':id'=>$id));
        return $user;
    }

    public function getLocaliteEntreprise($id){
        $statement = "SELECT * FROM Entreprise NATURAL JOIN lieu_entreprise NATURAL JOIN Localite WHERE id_entreprise = :id ;";
        $user = $this->db->executeAll($statement, array(':id'=>$id));
        return $user;
    }
}

?>  