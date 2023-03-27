<?php


require_once(__DIR__."/../lib/database.php");

class UserModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllById($id){
        $statement="SELECT * from Utilisateur  where id_utilisateur=$id";
        return $this->db->Query($statement);
    }

    public function IsStudent($id){
        $statement="SELECT * from Utilisateur natural join Eleve where id_utilisateur=$id";
        if(count($this->db->Query($statement))==1){
            return true;
        }
        else{
            return false;
        }
    }
}