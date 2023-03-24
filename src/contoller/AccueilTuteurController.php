<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."../modele/EtudiantModele.php");
class AccueilTuteurController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $this->smarty->assign("DocumentTitle","Accueil");
        $request = new EtudiantModele;
        $this->smarty->assign("etudiant",$this->request->getAllRechercheByIdTuteur);

        $this->smarty->display('accueilTuteur.tpl');
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