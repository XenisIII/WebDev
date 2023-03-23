<?php
require_once(__DIR__."/../lib/database.php");
class ModeleConnexion{
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    public function searchUserRole($id){
        $user = $this->db->execute("SELECT * FROM Eleve WHERE id_utilisateur=:id", array(':id'=>$id));
        if ($user > "0"){
            return "Eleve";
        } else {
            $user = $this->db->execute("SELECT * FROM Tuteur WHERE id_utilisateur=:id", array(':id'=>$id));
            if ($user > "0"){
                return "Tuteur";
            } else {
                $user = $this->db->execute("SELECT * FROM Admin WHERE id_utilisateur=:id", array(':id'=>$id));
                if ($user > "0"){
                    return "Admin";
                } else {
                    echo "<script>alert('Erreur')</script>";
                }
            }
        }
    }

    function login($username,$password){
        $user = $this->db->execute("SELECT * FROM Utilisateur WHERE nom_utilisateur=:username AND mdp=:password", array(':username'=>$username, ':password'=>$password));
        if ($user!=false){
            session_start();
            $_SESSION['user_id']=$user->id_utilisateur;
            $_SESSION['user_type']=$this->searchUserRole($user->id_utilisateur);
            echo searchUserRole($user->id_utilisateur);
        }
        return $user!=false;
    }
}
?>