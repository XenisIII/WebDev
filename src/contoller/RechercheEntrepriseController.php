<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/RechercheEntrepriseModele.php");
class RechercheEntrepriseController{
    private $smarty;
    private $entreprise;

    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->entreprise=new EntrepriseModele();
    }

    public function index(){
        $get="";
        $searchget="";
        $scale=0;
        $bool=false;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
            $page=1;
        }
        if(isset($_GET['search'])){
            $arrayEntreprise=$this->entreprise->getAllEntrepriselike($_GET['search']);
            $get="&search=".$_GET['search'];
            $searchget="&search=".$_GET['search'];
            $bool=true;
        }
        if(isset($_GET['scales'])){
            $scale=$_GET['scales'];
            $get=$get."&scales=$scale";
            $bool=true;
            switch($scale){
                case 0:
                    $arrayEntreprise=$this->entreprise->getALLEntrepriseScale("ORDER BY id_entreprise desc");
                    break;
                case 1:
                    $arrayEntreprise=$this->entreprise->getALLEntrepriseScale("ORDER BY id_entreprise asc");
                    break;
            }
        }
        if(isset($_GET['scales']) and isset($_GET['search'])){
            $arrayEntreprise=$this->entreprise->getALLEntrepriseScaleLike($statement,$_GET['search']);
        }
        elseif($bool==false){
            $arrayEntreprise= $this->entreprise->getAllEntreprise();
        }
        
        $count=count($arrayEntreprise);
        $nbpage=intval(round($count/5));
        $this->smarty->assign("DocumentTitle","Recherche Entreprise");
        $this->smarty->assign("Pages",$nbpage);
        $this->smarty->assign("Thispage",$page);
        $this->smarty->assign('TotalEntreprise',$count);
        $this->smarty->assign('nbdebut',1+($page-1)*5);
        $this->smarty->assign('nbfin',5+($page-1)*5);
        $this->smarty->assign("AllEntreprise",$arrayEntreprise);
        $this->smarty->assign('SearchGet',$searchget);
        $this->smarty->assign("get",$get);
        $this->smarty->assign("ActualScale",$scale);
    //print_r(/*$this->entreprise->getAllEntreprise()*/$arrayEntreprise);
        $this->smarty->display('rechercheEntreprise.tpl');
    }
    public function error(){
        $this->smarty->assign("DocumentTitle","404 NOT FOUND");
        $this->smarty->display('error.tpl');
    }
}
?>