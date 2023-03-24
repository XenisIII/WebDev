<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/OffreModele.php");

class AccueilEtudiantController{
    private $smarty;
    private $offre;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->offre=new OffreModele();
    }
    public function index(){
        /* print_r($this->offre->getOffreCompetence());*/
        $this->smarty->assign("DocumentTitle","accueilEtudiant");
        $this->smarty->assign("DerniereOffre",$this->offre->getOffreCompetence());


        $this->smarty->display('accueilEtudiant.tpl');
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