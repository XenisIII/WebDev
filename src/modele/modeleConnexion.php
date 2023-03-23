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
            echo "<script>alert('Eleve')</script>"; 
            return "Eleve";
        } 
        $user = $this->db->execute("SELECT * FROM Tuteur WHERE id_utilisateur=:id;", array(':id'=>$id));
        if ($user && count(array($user)) > 0){
            echo "<script>alert('Tuteur')</script>"; 
            return "Tuteur";
        }
        $user = $this->db->execute("SELECT * FROM Admin WHERE id_utilisateur=:id;", array(':id'=>$id));
        if ($user && count(array($user)) > 0){
            echo "<script>alert('Admin')</script>"; 
            return "Admin";
        } 
        echo "<script>alert('Erreur')</script>"; 
    
        return FALSE;
    }

    public function login($username,$password){
        $user = $this->db->execute("SELECT * FROM Utilisateur WHERE nom_utilisateur=:username AND mdp=:password;", array(':username'=>$username, ':password'=>$password));
        if ($user!=false){
            session_start();
            $_SESSION['user_id']=$user->id_utilisateur;
            $_SESSION['user_type']=$this->searchUserRole($user->id_utilisateur);
        }
        return $user!=false;
    }
}
?>