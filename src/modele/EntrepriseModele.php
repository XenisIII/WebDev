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

    public function modifyNom($id, $nom){
        $statement = "UPDATE Entreprise SET nom_entreprise = :nom WHERE id_entreprise = :id;";
        $this->db->execute($statement, array(':nom'=>$nom, ':id'=>$id));
    }
    public function modifySecteur($id, $secteur){
        $statement = "UPDATE Entreprise SET secteur_activite = :secteur WHERE id_entreprise = :id;";
        $this->db->execute($statement, array(':secteur'=>$secteur, ':id'=>$id));
    }
    public function modifyNbStagiaire($id, $nbStagiaire){
        $statement = "UPDATE Entreprise SET nb_ancien_stagiaire = :nbStagiaire WHERE id_entreprise = :id;";
        $this->db->execute($statement, array(':nbStagiaire'=>$nbStagiaire, ':id'=>$id));
    }
    public function modifyConfiance($id, $confiance){
        $statement = "UPDATE Entreprise SET confiance_pilote = :confiance WHERE id_entreprise = :id;";
        $this->db->execute($statement, array(':confiance'=>$confiance, ':id'=>$id));
    }
    public function modifyLocalite($id_localite, $id_entreprise){
        $statement = "UPDATE lieu_entreprise SET id_localite = :id_localite WHERE id_entreprise = :id_entreprise;";
        $this->db->execute($statement, array(':id_localite'=>$id_localite, ':id_entreprise'=>$id_entreprise));
    }
    public function verifyLocalite($localite, $cp){
        $statement = "SELECT * FROM Localite WHERE localite = :localite AND cp = :cp;";
        $user = $this->db->execute($statement, array(':localite'=>$localite, ':cp'=>$cp));
        return $user->id_localite;
    }

    public function createLocalite($localite, $cp){
        $statement = "INSERT INTO Localite (localite, cp) VALUES (:localite, :cp);";
        $user = $this->db->execute($statement, array(':localite'=>$localite, ':cp'=>$cp));
    }

}

?>  