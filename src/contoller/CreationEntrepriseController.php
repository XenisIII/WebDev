<?php
require(__DIR__."\\..\\lib\\smarty.php");
require(__DIR__."\\..\\modele\\modeleCreationEntreprise.php");
class CreationEntrepriseController{
    private $smarty;
    private $entreprise;

    function __construct()
    {
        $this->smarty = new AppSmarty();
        $this->entreprise = new modeleCreationEntreprise();
    }

    public function createEntreprise(/*$nomEntr, $secteurAct, $nbAncienStagiaire, $evalStagiaire = NULL, $confPilote, $localite, $cp*/){
        if(isset($_POST["nom_entreprise"])){
            $nomEntr = $_POST["nom_entreprise"];
        } else{
            $nomEntr = NULL;
        }
        if(isset($_POST["secteur_activite"])){
            $secteurAct = $_POST["secteur_activite"];
        } else{
            $secteurAct = NULL;
        }
        if(isset($_POST["nb_ancien_stagiaire"])){
            $nbAncienStagiaire = $_POST["nb_ancien_stagiaire"];
        } else{
            $nbAncienStagiaire = NULL;
        }
        if(isset($_POST["confiance"])){
            $confPilote = $_POST["confiance"];
        } else{
            $confPilote = NULL;
        }
        if(isset($_POST["localite"])){
            $localite = $_POST["localite"];
        } else{
            $localite = NULL;
        }
        if(isset($_POST["CP"])){
            $cp = $_POST["CP"];
        } else{
            $cp = NULL;
        }
        $this->entreprise->setCP($cp);
        $this->entreprise->setLocalite($localite);
        $this->entreprise->setNomEntr($nomEntr);
        $this->entreprise->setSecteurAct($secteurAct);
        $this->entreprise->setNbAncienStagiaire($nbAncienStagiaire);
        $this->entreprise->setConfPilote($confPilote);
        $this->entreprise->verifyEntreprise();
    }

    public function index(){
        $this->smarty->assign("DocumentTitle","CreationEntreprise");
        $this->smarty->display('creationEntreprise.tpl');
    }
    public function error(){
        $this->smarty->assign("DocumentTitle","404 NOT FOUND");
        $this->smarty->display('error.tpl');
    }
}
/*$tmp_=new AppSmarty();
$tmp_->assign("DocumentTitle","Démo");
$tmp_->display('demo.tpl');*/
?>