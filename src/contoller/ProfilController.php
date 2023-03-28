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
        $isUserStudent=$this->user->IsStudent($_SESSION['user_id']);
        $objuser=$this->user->getAllById($_GET['user_id'])[0];
        $AllOffer=$this->student->getAllFavById($_GET['user_id']);
        $isStudent=$this->user->IsStudent($_GET['user_id']);
        $promo="";
        if($isStudent){
            $promo=$this->student->getPromoById($_GET['user_id'])[0];
            $this->smarty->assign("promo",$promo->promotion);
            $this->smarty->assign("centre",$promo->centre);
        }
        else{
            $this->smarty->assign("promo","a");
            $this->smarty->assign("centre","a");
        }
        $this->smarty->assign("isTuteur",$isStudent);
        $this->smarty->assign("id_profil",$_GET['user_id']);
        $this->smarty->assign("nom",$objuser->nom_utilisateur);
        $this->smarty->assign("prenom",$objuser->prenom_utilisateur );
        $this->smarty->assign("isStudent",$isUserStudent);
        $this->smarty->assign("AllOffer",$AllOffer);
        $this->smarty->assign("DocumentTitle","profil");
        $this->smarty->display('profil.tpl');
    }
    
    public function index(){
        $isStudent=$this->user->IsStudent($_SESSION['user_id']);
        $this->smarty->assign("isTuteur",$isStudent);
        $promo="";
        if($isStudent){
            $promo=$this->student->getPromoById($_SESSION['user_id'])[0];
            $this->smarty->assign("promo",$promo->promotion);
            $this->smarty->assign("centre",$promo->centre);
        }
        else{
            $this->smarty->assign("promo","zzd");
        $this->smarty->assign("centre","dzdz");
        }
        $objuser=$this->user->getAllById($_SESSION['user_id'])[0];
        $AllOffer=$this->student->getAllFavById($_SESSION['user_id']);
        $this->smarty->assign("id_profil",$_SESSION['user_id']);
        $this->smarty->assign("nom",$objuser->nom_utilisateur);
        $this->smarty->assign("prenom",$objuser->prenom_utilisateur );
        $this->smarty->assign("isStudent",$isStudent);
        $this->smarty->assign("AllOffer",$AllOffer);
        $this->smarty->assign("DocumentTitle","profil");
        $this->smarty->display('profil.tpl');
    }
    public function send(){
        if(isset($_GET['nom'])){
            $nom=$_GET['nom'];
            $this->student->modifyNameById($_GET['id'],$nom);
        }
        if(isset($_GET['prenom'])){
            $prenom=$_GET['prenom'];
            $this->student->modifyPrenomById($_GET['id'],$prenom);
        }
        header("Location: /index.php/profil/of?user_id=".$_GET['id']);
        $this->smarty->display('error.tpl');
    }
    public function delete(){
        $id=$_GET['id'];
        $this->student->deleteById($id);
        header("Location: /index.php/profil/of?id_user=21");
        $this->smarty->display('error.tpl');
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