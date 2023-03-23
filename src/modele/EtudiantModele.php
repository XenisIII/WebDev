<?php
require(__DIR__."/../lib/database.php");
class EtudiantModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllById($id){
        $statement="SELECT * from Offre where id_offre='$id'";
        return $this->db->Query($statement)[0];
    }
}
?>