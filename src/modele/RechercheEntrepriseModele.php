<?php
require(__DIR__."/../lib/database.php");
class EntrepriseModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllEntreprise($order="ORDER BY id_entreprise desc"){
        $statement="SELECT * from Entreprise natural join lieu_entreprise natural join Localite WHERE nom_entreprise != 'DELETED' $order" ;
        return $this->db->Query($statement);
    }
    //Searchbar-------------------------------------------------------------------------------------------------
    public function getAllEntrepriseLike($value,$order="ORDER BY id_entreprise desc"){
        $statement="SELECT * from Entreprise natural join lieu_entreprise natural join Localite where nom_entreprise like :string AND nom_entreprise != 'DELETED'; $order";
        return $this->db->executeAll($statement,array(":string"=>"%".$value."%"));
    //----------------------------------------------------------------------------------------------------------    
    }
    public function getAllEntrepriseScale($value){
        $statement="SELECT * from Entreprise natural join lieu_entreprise natural join Localite WHERE nom_entreprise != 'DELETED' $value;";
        return $this->db->Query($statement);
    }
    public function getALLEntrepriseScaleLike($scale,$search,$order="ORDER BY id_entreprise desc"){
        $statement="SELECT * from (Select * from Offre natural join Localite natural join Entreprise where informations like :string)as a where $scale $order";
        return $this->db->executeAll($statement,array(":string"=>"%".$search."%"));
    }
}
?>  