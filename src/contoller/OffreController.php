<?php
    require(__DIR__."/../lib/smarty.php");
    require(__DIR__."/../modele/OffreModele.php");
    require_once(__DIR__."/../modele/EtudiantModele.php");
    require_once(__DIR__."/../modele/userModele.php");
    class OffreController{
        private $smarty;
        private $offre;
        private $id;
        private $user;
        private $student;
        function __construct()
        {
            $this->smarty=new AppSmarty();
            $this->offre=new OffreModele();
            $this->id=$_GET["id"];
            $this->user=new UserModele();
            $this->student=new EtudiantModele();
        }
        public function index(){
            $isStudent=$this->user->IsStudent($_SESSION['user_id']);
            $this->smarty->assign('isStudent',$isStudent);
            $this->smarty->assign('id',$this->id);
            $this->smarty->assign("DocumentTitle",$this->offre->getAllById($this->id)->nom_offre);
            $this->smarty->assign("nomOffre",$this->offre->getAllById($this->id)->nom_offre);
            $this->smarty->assign("Duree",$this->offre->getAllById($this->id)->duree_stage);
            $this->smarty->assign("DateDebut",$this->offre->getAllById($this->id)->date_debut_stage);
            $this->smarty->assign("DatePoste",$this->offre->getAllById($this->id)->date_mise_en_ligne);
            $this->smarty->assign("info",$this->offre->getAllById($this->id)->informations);
            $this->smarty->assign("NomEntreprise",$this->offre->getAllById($this->id)->nom_entreprise);
            $this->smarty->assign("Localite",$this->offre->getAllById($this->id)->localite);
            $this->smarty->assign("mailContact",$this->offre->getAllById($this->id)->mail);
            $this->smarty->assign("NoteTuteur",$this->offre->getAllById($this->id)->confiance_pilote);
            $this->smarty->assign("Competences",$this->offre->getCompetencesById($this->id));
            $this->smarty->display('offre.tpl');
        }
        public function postule(){
            $id_student=$this->student->getIdEleveById($_SESSION['user_id']);
            $id_offre=$_GET['id'];
            $this->offre->ChangeStatut($id_offre,$id_student,1);
            header("Location: /../index.php/offre/index?id=$id_offre");
            $this->smarty->display('error.tpl');
        }
        public function error(){
            $this->smarty->assign("DocumentTitle","404 NOT FOUND");
            $this->smarty->display('error.tpl');
        }
    }
?>