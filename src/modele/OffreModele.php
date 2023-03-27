<?php
require_once(__DIR__."/../lib/database.php");
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
    public function getAllOffer($order="ORDER BY id_offre desc"){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise $order" ;
        return $this->db->Query($statement);
    }
    public function getAllOfferLike($value,$order="ORDER BY id_offre desc"){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where informations like :string; $order";
        return $this->db->executeAll($statement,array(":string"=>"%".$value."%"));
        
    }
    public function getAllOfferScale($value){
        $statement="SELECT * from Offre natural join Localite natural join Entreprise where $value";
        return $this->db->Query($statement);
    }
    public function getALLofferScaleLike($scale,$search,$order="ORDER BY id_offre desc"){
        $statement="SELECT * from (Select * from Offre natural join Localite natural join Entreprise where informations like :string)as a where $scale $order";
        return $this->db->executeAll($statement,array(":string"=>"%".$search."%"));
    }
    public function ChangeStatut($id_offre,$id_student,$id_statue){
        $statement="INSERT INTO Postule(id_offre,id_eleve,id_statut) VALUES($id_offre,$id_student,$id_statue)";
        $this->db->Query($statement);
    }
    public function DeleteStatut($id_offre,$id_student){
        $statement="DELETE from Postule where id_offre=$id_offre and id_eleve=$id_student";
        $this->db->Query($statement); 
    }


}
?>  