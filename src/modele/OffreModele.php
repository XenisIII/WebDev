<?php
require(__DIR__."/../lib/database.php");
class OffreModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllById($id){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where id_offre='$id'";
        return $this->db->Query($statement)[0];
    }
    public function getCompetencesById($id){
        $statement="SELECT * from Offre natural join Competence_requise natural join Competence where id_offre='$id'";
        return $this->db->Query($statement);
    }


    

    public function getOffreCompetence(){
        $statement ="SELECT nom_offre, competence 
        FROM Offre 
        NATURAL JOIN Competence_requise 
        NATURAL JOIN Competence 
        ORDER BY date_mise_en_ligne ASC 
        LIMIT 20";
        return $this->db->Query($statement);
    }

    public function AccueilEtudiant(){
        $id_eleve = $this->db->execute("SELECT * FROM Offre NATURAL JOIN Postule NATURAL JOIN Statut WHERE statut = 'En attente' AND id_eleve = ':sess';", array(':sess'=>$_Session[id_utilisateur]));
        return $id_eleve ;
    }
}

?>