<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/EtudiantModele.php");
class AccueilTuteurController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $request = new EtudiantModele;
        $this->smarty->assign("etudiant",$request->getAllRechercheByIdTuteur());
        $this->smarty->assign("stage_trouve",$request->getCountByStatutByIdTuteur("Accepté")[0]->nb_eleve);
        $this->smarty->assign("stage_recherche",$request->getCountByStatutByIdTuteur("En recherche")[0]->nb_eleve);
        $this->smarty->assign("stage_attente",$request->getCountByStatutByIdTuteur("En attente")[0]->nb_eleve);
        $this->smarty->assign("tot_eleve",$request->getCountAll()[0]->nb_eleve);
        $this->smarty->assign("DocumentTitle","Accueil");
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