<?php
require(__DIR__."/../lib/smarty.php");
require(__DIR__."/../modele/EntrepriseModele.php");
class EntrepriseController{
    private $smarty;
    private $entreprise;
    private $role;
    function __construct()
    {
        $this->smarty=new AppSmarty();
        $this->entreprise=new EntrepriseModele();
    }

    public function delete(){
        if ($_SESSION['user_type'] != "Eleve"){
            $id = $_POST['id'];
            $this->entreprise->modifyNom($id, "DELETED")
            header(Location: "/../index.php/rechercheEntreprise.php");
        }
    }

    public function modify(){
        if ($_SESSION['user_type'] != "Eleve"){
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                if(isset($_POST['nom'])){
                    if ($_POST['nom'] != ""){
                    $nom = $_POST['nom'];
                    } else {
                    $nom = "";
                }
                }
                if(isset($_POST['secteur'])){
                    if ($_POST['secteur'] != ""){
                    $secteur = $_POST['secteur'];
                    } else {
                    $secteur = "";
                }
                }
                if(isset($_POST['nbStagiaire'])){
                    if ($_POST['nbStagiaire'] != ""){
                    $nbStagiaire = $_POST['nbStagiaire'];
                    } else {
                    $nbStagiaire = "";
                }
                }
                if(isset($_POST['confiance'])){
                    if($_POST['confiance'] != ""){
                    $confiance = $_POST['confiance'];
                    } else {
                    $confiance = "";
                }
                } 
                if(isset($_POST['localite'])){
                    if ($_POST['localite'] != ""){
                    $localite = $_POST['localite'];
                    } else {
                        $localite = "";
                    }
                }
                if(isset($_POST['CP'])){
                    if($_POST['CP'] != ""){
                    $cp = $_POST['CP'];
                } else {
                    $cp = "";
                    }
                }
                if ($localite != "" && $cp != ""){
                    $lieu = $this->entreprise->verifyLocalite($localite, $cp);
                    if ($lieu != null){
                        $this->entreprise->modifyLocalite($lieu, $id);
                        if ($nom != ""){
                            $this->entreprise->modifyNom($id, $nom);
                        }
                        if ($secteur != ""){
                            $this->entreprise->modifySecteur($id, $secteur);
                        }
                        if ($nbStagiaire != ""){
                            $this->entreprise->modifyNbStagiaire($id, $nbStagiaire);
                        }
                        if ($confiance != ""){
                            $this->entreprise->modifyConfiance($id, $confiance);
                        }
                    } else {
                        $this->entreprise->createLocalite($localite, $cp);
                        $lieu = $this->entreprise->verifyLocalite($localite, $cp);
                        $this->entreprise->modifyLocalite($lieu, $id);
                        if ($nom != ""){
                            $this->entreprise->modifyNom($id, $nom);
                        }
                        if ($secteur != ""){
                            $this->entreprise->modifySecteur($id, $secteur);
                        }
                        if ($nbStagiaire != ""){
                            $this->entreprise->modifyNbStagiaire($id, $nbStagiaire);
                        }
                        if ($confiance != ""){
                            $this->entreprise->modifyConfiance($id, $confiance);
                        }
                    }
                } else {
                    if ($nom != ""){
                        $this->entreprise->modifyNom($id, $nom);
                    }
                    if ($secteur != ""){
                        $this->entreprise->modifySecteur($id, $secteur);
                    }
                    if ($nbStagiaire != ""){
                        $this->entreprise->modifyNbStagiaire($id, $nbStagiaire);
                    }
                    if ($confiance != ""){
                        $this->entreprise->modifyConfiance($id, $confiance);
                    }
                }
            }
        
        
        } else {
        $this->smarty->assign("DocumentTitle","404 NOT FOUND");
        $this->smarty->display('error.tpl');
        }
        $this->smarty->assign("DocumentTitle","Entreprsie");
        $this->smarty->assign("DocumentTitle","Entreprsie");
        $this->smarty->assign("nomEntreprise",$this->entreprise->getEntreprise($id));
        $this->smarty->assign("localite",$this->entreprise->getLocaliteEntreprise($id));
        $this->smarty->assign("confPilote", $this->entreprise->getEntreprise($id));
        $this->smarty->assign("offres",$this->entreprise->getOffres($id));
        $this->smarty->assign("role", $this->role);
        $this->smarty->display('entreprise.tpl');
    }

    public function index(){
        $this->role = $_SESSION['user_type'];
        $id = $_GET["id"];
        $this->smarty->assign("DocumentTitle","Entreprsie");
        $this->smarty->assign("nomEntreprise",$this->entreprise->getEntreprise($id));
        $this->smarty->assign("localite",$this->entreprise->getLocaliteEntreprise($id));
        $this->smarty->assign("confPilote", $this->entreprise->getEntreprise($id));
        $this->smarty->assign("offres",$this->entreprise->getOffres($id));
        $this->smarty->assign("role", $role);
        $this->smarty->display('entreprise.tpl');
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