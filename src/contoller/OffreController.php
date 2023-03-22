<?php
    require(__DIR__."/../lib/smarty.php");
    class OffreController{
        private $smarty;
        function __construct()
        {
            $this->smarty=new AppSmarty();
        }
        public function index(){
            $this->smarty->assign("DocumentTitle","Offre");
            $this->smarty->display('offre.tpl');
        }
        public function error(){
            $this->smarty->assign("DocumentTitle","404 NOT FOUND");
            $this->smarty->display('error.tpl');
        }
    }
?>