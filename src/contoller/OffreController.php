<?php
    require(__DIR__."/../lib/smarty.php");
    require(__DIR__."/../modele/OffreModele.php");
    class OffreController{
        private $smarty;
        private $offre;
        private $id;
        function __construct()
        {
            $this->smarty=new AppSmarty();
            $this->offre=new OffreModele();
            $this->id=$_GET["id"];
        }
        public function index(){

            $this->smarty->assign("DocumentTitle",$this->offre->getAllById($this->id)->nom_offre);
            $this->smarty->assign("nomOffre",$this->offre->getAllById($this->id)->nom_offre);
            $this->smarty->assign("Duree",$this->offre->getAllById($this->id)->duree_stage);
            $this->smarty->assign("DateDebut",$this->offre->getAllById($this->id)->date_debut_stage);
            $this->smarty->assign("DatePoste",$this->offre->getAllById($this->id)->date_mise_en_ligne);
            $this->smarty->assign("info",$this->offre->getAllById($this->id)->informations);
            $this->smarty->assign("NomEntreprise",$this->offre->getAllById($this->id)->nom_entreprise);
            $this->smarty->assign("Localite",$this->offre->getAllById($this->id)->localite);
            $this->smarty->display('offre.tpl');
        }
        public function error(){
            $this->smarty->assign("DocumentTitle","404 NOT FOUND");
            $this->smarty->display('error.tpl');
        }
    }
?>