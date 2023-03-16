<?php
require(__DIR__."\\..\\lib\\smarty.php");
class NavbarController{
    private $smarty;
    function __construct()
    {
        $this->smarty=new AppSmarty();
    }
    public function index(){
        $this->smarty->assign("DocumentTitle","Navbar");
        $this->smarty->display('navbar.tpl');
    }
}
?>