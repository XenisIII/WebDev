<?php
require(__DIR__."\\..\\lib\\smarty.php");
require(__DIR__."\\..\\modele\\CandidatureModele.php");
class CandidatureController{
    private $role;
    
    function __construct(){
        $this->smarty=new AppSmarty();
    }

    public function index(){
        if(isset($_SESSION['user_type'])){
            $this->role = $_SESSION['user_type'];
            if ($this->role == "Eleve"){
                $this->smarty->assign("DocumentTitle","Candidatures");
                $this->smarty->display("candidature.tpl");
            }
        }
        
    }
}

?>