<?php
require(__DIR__."\\..\\lib\\smarty.php");
class VueEntrepriseController{
    private $role;
    
    function __construct(){
        $this->smarty=new AppSmarty();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['user_type'])){
            $this->role = $_SESSION['user_type'];
            switch ($this->role){
                case "Eleve":
                    echo $this->role;
                    header("Location: /index.php/accueilEtudiant");
                    break;
                case "Tuteur":
                    header("Location: /index.php/creationEntreprise");
                    break;
                case "Admin":
                    header("Location: /index.php/entreprise");
                    break;
            }
        }
        echo 'erreur!';
        
    }
}

?>