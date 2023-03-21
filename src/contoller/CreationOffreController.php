<?php
require(__DIR__."\\..\\lib\\smarty.php");
class CreationOffreController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $this->smarty->assign("DocumentTitle","CreationOffre");
        $this->smarty->assign("style","<link rel='stylesheet' type='text/css' href='../../css/creationOffre.css' />");
        $this->smarty->display('creationOffre.tpl');
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