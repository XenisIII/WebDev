<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/OffreModele.php");
require_once(__DIR__."/../modele/EtudiantModele.php");

class AccueilEtudiantController{
    private $smarty;
    private $offre;
    private $student;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->offre=new OffreModele();
        $this->student= new EtudiantModele();
    }
    public function index(){
        /* print_r($this->offre->getOffreCompetence());*/
        $this->smarty->assign("DocumentTitle","accueilEtudiant");
        $this->smarty->assign("DerniereOffre",$this->offre->getOffreCompetence());
        $this->smarty->assign("AllOffer",$this->offre->getAllOfferByIdStudent($this->student->getIdEleveByID($_SESSION['user_id'])));
        $this->smarty->assign("NbOffre",$this->student->CountAllOfferById($this->student->getIdEleveByID($_SESSION['user_id'])));
        $this->smarty->assign("NbRefused",$this->student->CountRefusedOfferById($this->student->getIdEleveByID($_SESSION['user_id'])));
        $this->smarty->assign("NbWaiting",$this->student->CountWaitingOfferById($this->student->getIdEleveByID($_SESSION['user_id'])));
        $this->smarty->display('accueilEtudiant.tpl');
    }
    public function error(){
        $this->smarty->assign("DocumentTitle","404 NOT FOUND");
        $this->smarty->display('error.tpl');
    }
    public function changeStatut(){
        $id_offer=$_GET['id_offre'];
        $id_statut=$_GET['id_statut'];
        $id_user=$_SESSION['user_id'];
        $id_student=$this->student->getIdEleveById($id_user);
        if($this->student->isStatued($id_offer,$id_student)){
            $this->student->UpdateStatut($id_offer,$id_student,$id_statut);

        }else{
            $this->student->ChangeStatut($id_offer,$id_student,$id_statut);
        }
        header('Location:'.$_SERVER['HTTP_REFERER']);
        $this->smarty->display('error.tpl');
    }
}
/*$tmp_=new AppSmarty();
$tmp_->assign("DocumentTitle","Démo");
$tmp_->display('demo.tpl');*/
?>