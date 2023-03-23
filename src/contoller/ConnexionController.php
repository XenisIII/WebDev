<?php
require(__DIR__."\\..\\lib\\smarty.php");
require(__DIR__."\\..\\modele\\modeleConnexion.php");

class ConnexionController{
    private $smarty;
    private $model;

    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->model= new ModeleConnexion();
    }

    public function index(){
        if (isset($_POST["username"]) && isset($_POST["password"])){
            $userName=$_POST["username"];
            $password=$_POST["password"];
            $loggedIn = $this->model->login($userName,$password);
            //$this->smarty->assign("loggedIn",$loggedIn);
            //header("Location: index.php/accueilEtudiant");
            if (!$loggedIn){
                //Afficher message erreur
                $this->smarty->assign("errorMessage","Invalid username or password");
            }
            }
        else{
            $this->smarty->assign("errorMessage",false);
        $this->smarty->assign("DocumentTitle","Connexion");
        $this->smarty->display('connexion.tpl');
    }}

    public function error(){
        $this->smarty->assign("DocumentTitle","404 NOT FOUND");
        $this->smarty->display('error.tpl');
    }
};
?>