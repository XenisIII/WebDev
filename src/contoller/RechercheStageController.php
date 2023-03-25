<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/OffreModele.php");
class RechercheStageController{
    private $smarty;
    private $offer;

    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->offer=new OffreModele();
    }
    public function index(){
        $get="";
        $scale=0;
        $bool=false;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
            $page=1;
        }
        if(isset($_GET['search'])){
            $arrayOffer=$this->offer->getAllOfferlike($_GET['search']);
            $get="&search=".$_GET['search'];
            $searchget="&search=".$_GET['search'];
            $bool=true;
        }
        if(isset($_GET['scales'])){
            $scale=$_GET['scales'];
            $get=$get."&scales=$scale";
            $bool=true;
            switch($scale){
                case 1:
                    if(!checkdate(date('m'),(intval(date('d'))-1),date('y'))){
                        if(checkdate((intval(date('m'))-1),date('d'),date('y'))){
                            if(checkdate((intval(date('m'))-1),31,date('y'))){
                                $day="31";
                            }elseif(checkdate((intval(date('m'))-1),30,date('y'))){
                                $day="30";
                            }elseif(checkdate((intval(date('m'))-1),d29,date('y'))){
                                $day='29';
                            }else{$day='28';}
                            $yesterday=date("y-").(intval(date('m'))-1).$day;
                        }
                        else{
                            $yesterday=(intval(date('y'))-1)."12"."31";
                        }
                    }
                    $statement="date_mise_en_ligne=$yesterday";
                    $arrayOffer=$this->offer->getAllOfferScale($statement);
                    break;
                case 0:
                    $statement="1=1";
                    $arrayOffer=$this->offer->getAllOffer();
                    break;
                case 2:
                    if(!checkdate(date('m'),(intval(date('d'))-1),date('y'))){
                        if(checkdate((intval(date('m'))-1),date('d'),date('y'))){
                            if(checkdate((intval(date('m'))-1),31,date('y'))){
                                $day="31";
                            }elseif(checkdate((intval(date('m'))-1),30,date('y'))){
                                $day="30";
                            }elseif(checkdate((intval(date('m'))-1),29,date('y'))){
                                $day='29';
                            }else{$day='28';}
                            $yesterday=date("y-").(intval(date('m'))-1).$day;
                        }
                        else{
                            $yesterday=(intval(date('y'))-1)."12"."31";
                        }
                    }
                    $weekago=date('y-m-').date('d');
                    $statement="date_mise_en_ligne=$yesterday";
                    break;
                case 3:
                    $yesterday=date("y-m-").date('d'-1);
                    $statement="date_mise_en_ligne=$yesterday";
                    break;
                case 4:
                    $yesterday=date("y-m-").date('d'-1);
                    $statement="date_mise_en_ligne=$yesterday";
                    break;
                case 5:
                    $yesterday=date("y-m-").date('d'-1);
                    $statement="date_mise_en_ligne=$yesterday";
                    break;
            }

        }
        if(isset($_GET['scales']) and isset($_GET['search'])){
            $arrayOffer=$this->offer->getALLofferScaleLike($statement,$_GET['search']);
        }
        elseif($bool==false){
            $arrayOffer= $this->offer->getAllOffer();
            }
        $count=count($arrayOffer);
        $nbpage=intval(round($count/5));
        $this->smarty->assign("DocumentTitle","Recherche Stage");
        $this->smarty->assign("Pages",$nbpage);
        $this->smarty->assign("Thispage",$page);
        $this->smarty->assign('TotalOffre',$count);
        $this->smarty->assign('nbdebut',1+($page-1)*5);
        $this->smarty->assign('nbfin',5+($page-1)*5);
        $this->smarty->assign("AllOffer",$arrayOffer);
        $this->smarty->assign('SearchGet',$searchget);
        $this->smarty->assign("get",$get);
        $this->smarty->assign("ActualScale",$scale);
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