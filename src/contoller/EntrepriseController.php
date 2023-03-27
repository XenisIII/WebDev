<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/EntrepriseModele.php");
class EntrepriseController{
    private $smarty;
    private $entreprise;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->entreprise=new EntrepriseModele();
    }

    public function index(){
        $id = $_GET["id"];
        $this->smarty->assign("DocumentTitle","Entreprsie");
        $this->smarty->assign("nomEntreprise",$this->entreprise->getEntreprise($id));
        $this->smarty->assign("localite",$this->entreprise->getLocaliteEntreprise($id));
        $this->smarty->assign("confPilote", $this->entreprise->getEntreprise($id));
        $this->smarty->assign("offres",$this->entreprise->getOffres($id));
        $this->smarty->display('entreprise.tpl');
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