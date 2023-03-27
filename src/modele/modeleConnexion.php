<?php
require_once(__DIR__."/../lib/database.php");
class ModeleConnexion{
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    public function searchUserRole($id){
        $user = $this->db->execute("SELECT * FROM Eleve WHERE id_utilisateur=:id;", array(':id'=>$id));
        if ($user && count(array($user)) > 0){
            return "Eleve";
        } 
        $user = $this->db->execute("SELECT * FROM Tuteur WHERE id_utilisateur=:id;", array(':id'=>$id));
        if ($user && count(array($user)) > 0){
            return "Tuteur";
        }
        $user = $this->db->execute("SELECT * FROM Admin WHERE id_utilisateur=:id;", array(':id'=>$id));
        if ($user && count(array($user)) > 0){ 
            return "Admin";
        } 
    
        return FALSE;
    }

    public function login($login,$password){
        $user = $this->db->execute("SELECT * FROM Utilisateur WHERE login=:login_user AND mdp=:password;", array(':login_user'=>$login, ':password'=>$password));
        if ($user!=null){
            session_start();
            $_SESSION['user_id']=$user->id_utilisateur;
            $_SESSION['user_type']=$this->searchUserRole($user->id_utilisateur);
            return $user!=false;
        }
        return "false";
    }
}
?>