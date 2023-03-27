<?php
require(__DIR__."/../lib/smarty.php");
require_once(__DIR__."/../modele/UserModele.php");
require_once(__DIR__."/../modele/OffreModele.php");
require_once(__DIR__."/../modele/EtudiantModele.php");
class ProfilController{
    private $smarty;
    private $student;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->user= new UserModele();
        $this->student= new EtudiantModele();
    }
    public function of(){
        $isStudent=$this->user->IsStudent($_GET['user_id']);
        $objuser=$this->user->getAllById($_GET['user_id'])[0];
        $AllOffer=$this->student->getAllFavById($_GET['user_id']);
        $this->smarty->assign("nom",$objuser->nom_utilisateur);
        $this->smarty->assign("prenom",$objuser->prenom_utilisateur );
        $this->smarty->assign("isStudent",$isStudent);
        $this->smarty->assign("AllOffer",$AllOffer);
        $this->smarty->assign("DocumentTitle","profil");
        $this->smarty->display('profil.tpl');
    }
    public function index(){
        $isStudent=$this->user->IsStudent($_SESSION['user_id']);
        $objuser=$this->user->getAllById($_SESSION['user_id'])[0];
        $AllOffer=$this->student->getAllFavById($_SESSION['user_id']);
        $this->smarty->assign("nom",$objuser->nom_utilisateur);
        $this->smarty->assign("prenom",$objuser->prenom_utilisateur );
        $this->smarty->assign("isStudent",$isStudent);
        $this->smarty->assign("AllOffer",$AllOffer);
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