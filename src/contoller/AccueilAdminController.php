<?php
require(__DIR__."\\..\\lib\\smarty.php");
class AccueilAdminController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $this->smarty->assign("DocumentTitle","accueilAdmin");
        $this->smarty->display('accueilAdmin.tpl');
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