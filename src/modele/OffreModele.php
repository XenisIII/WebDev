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
        $statement="SELECT * from Offre natural join Localite natural join Entreprise" ;
        return $this->db->Query($statement);
    }
    public function getAllOfferLike($value){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where informations like :string;";
        return $this->db->executeAll($statement,array(":string"=>"%".$value."%"));
        
    }
    public function getAllOfferScale($value){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where $value";
        return $this->db->Query($statement);
    }
    public function getALLofferScaleLike($scale,$search){
        $statement="SELECT * from (Select * from Offre natural join Localite natural join Entreprise where informations like :string)as a where $scale ";
        return $this->db->executeAll($statement,array(":string"=>"%".$search."%"));
    }


}
?>