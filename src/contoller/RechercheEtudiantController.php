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
        $id_tuteur=$_SESSION['user_id'];
        $student = new EtudiantModele;
        $tuteur = new TuteurModele;
        if(isset($_GET['search'])){
            $AllStudent=$student->getAllStudentlike($id_tuteur,$_GET["search"]);
        }else{
            $AllStudent=$student->getAllByIdTuteur();
             }
        $this->smarty->assign("etudiant",$AllStudent);
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