<?php
require(__DIR__."\\..\\lib\\smarty.php");
class ProfilController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $this->smarty->assign("DocumentTitle","profil");
        $this->smarty->display('profil.tpl');
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