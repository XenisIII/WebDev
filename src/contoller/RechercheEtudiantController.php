<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/EtudiantModele.php");
require(__DIR__."/../modele/TuteurModele.php");
class RechercheEtudiantController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $student = new EtudiantModele;
        $tuteur = new TuteurModele;
        $this->smarty->assign("etudiant",$student->getAllByIdTuteur());
        $this->smarty->assign("promo",$tuteur->getAllClasseByTuteur());
        $this->smarty->assign("DocumentTitle","RechercheEtudiant");
        $this->smarty->display('rechercheEtudiant.tpl');
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