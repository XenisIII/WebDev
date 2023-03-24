<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/OffreModele.php");
class RechercheStageController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->offer=new OffreModele();
    }
    public function index(){
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
            $page=1;
        }
        if(isset($_GET['search'])){
            $arrayOffer=$this->offer->getAllOfferlike($_GET['search']);
            $count=count($arrayOffer);
        }else{
        $arrayOffer= $this->offer->getAllOffer();
        $count=count($arrayOffer);}
        $nbpage=$count/5;
        $this->smarty->assign("DocumentTitle","Recherche Stage");
        $this->smarty->assign("Pages",$nbpage);
        $this->smarty->assign("Thispage",$page);
        $this->smarty->assign('TotalOffre',$count);
        $this->smarty->assign('nbdebut',1+($page-1)*5);
        $this->smarty->assign('nbfin',5+($page-1)*5);
        $this->smarty->assign("AllOffer",$arrayOffer);
        $this->smarty->display('rechercheStage.tpl');
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