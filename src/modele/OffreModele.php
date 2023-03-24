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
    public function getAllOffer(){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise";
        return $this->db->Query($statement);
    }
    public function getAllOfferLike($string){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where informations like :string";
        return $this->db->executeAll($statement,array(":string"=>$string));
        
    }


}
?>