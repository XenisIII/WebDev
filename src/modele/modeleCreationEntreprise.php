<?php
require_once(__DIR__."/../lib/database.php");
class modeleCreationEntreprise{
    private $db;
    private $CP;
    private $localite;
    private $nomEntr;
    private $secteurAct;
    private $nbAncienStagiaire;
    private $evalStagiaire;
    private $confPilote;
    private $id;

    function __construct() {
        $this->db = new Database();
    }

    function getCP(){
        return $this->CP;
    }

    function setCP($cp){
        $this->CP = $cp;
    }

    function getLocalite(){
        return $this->localite;
    }

    function setLocalite($localite){
        $this->localite = $localite;
    }

    function getNomEntr(){
        return $this->nomEntr;
    }

    function setNomEntr($nom){
        $this->nomEntr = $nom;
    }

    function getSecteurAct(){
        return $this->secteurAct;
    }

    function setSecteurAct($secteur){
        $this->secteurAct = $secteur;
    }

    function getNbAncienStagiaire(){
        return $this->nbAncienStagiaire;
    }

    function setNbAncienStagiaire($nb){
        $this->nbAncienStagiaire = $nb;
    }

    function getEvalStagiaire(){
        return $this->evalStagiaire;
    }

    function setEvalStagiaire($eval){
        $this->evalStagiaire = $eval;
    }

    function getConfPilote(){
        return $this->confPilote;
    }

    function setConfPilote($conf){
        $this->confPilote = $conf;
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    public function verifyEntreprise(){
        $statement = "SELECT id_entreprise FROM Entreprise WHERE nom_entreprise = :nom AND secteur_activite = :secteur AND nb_ancien_stagiaire = :nbAncienStagiaire AND confiance_pilote = :confPilote;";
        $user = $this->db->execute($statement, array(':nom'=>$this->nomEntr, ':secteur'=>$this->secteurAct, ':nbAncienStagiaire'=>$this->nbAncienStagiaire, ':confPilote'=>$this->confPilote));
        if ($user!=null){
            $this->verifyLocalite();
            return true;
        }
        $this->create();
        $verifyLocalite = $this->verifyLocalite();
        $statement = "SELECT id_entreprise FROM Entreprise WHERE nom_entreprise = :nom AND secteur_activite = :secteur AND nb_ancien_stagiaire = :nbAncienStagiaire AND confiance_pilote = :confPilote;";
        $user = $this->db->execute($statement, array(':nom'=>$this->nomEntr, ':secteur'=>$this->secteurAct, ':nbAncienStagiaire'=>$this->nbAncienStagiaire, ':confPilote'=>$this->confPilote));
        $statement = "INSERT INTO lieu_entreprise (id_entreprise, id_localite) VALUES (:id_ent, :id_lieu);";
        $userf = $this->db->execute($statement, array(':id_ent'=>$user->id_entreprise, ':id_lieu'=>$verifyLocalite));
    }

    public function verifyLocalite(){
        $statement = "SELECT id_localite FROM Localite WHERE localite = :localite AND cp = :cp;";
        $user = $this->db->execute($statement, array(':localite'=>$this->localite, ':cp'=>$this->CP));
        if ($user!=null){
            return $user->id_localite;
        }
        $statement = "INSERT INTO Localite (localite, cp) VALUES (:localite, :cp);";
        $user = $this->db->execute($statement, array(':localite'=>$this->localite, ':cp'=>$this->CP));
        $statement = "SELECT id_localite FROM Localite WHERE localite = :localite AND cp = :cp;";
        $user = $this->db->execute($statement, array(':localite'=>$this->localite, ':cp'=>$this->CP));
        return $user->id_localite;
    }

    public function create(){
        $statement = "INSERT INTO Entreprise (nom_entreprise, secteur_activite, nb_ancien_stagiaire, evaluation_stagiaire, confiance_pilote) VALUES (:nomEntr, :secteurAct, :nbAncienStagiaire, :evalStagiaire, :confPilote);";
        $user = $this->db->execute($statement, array(':nomEntr'=>$this->nomEntr, ':secteurAct'=>$this->secteurAct, ':nbAncienStagiaire'=>$this->nbAncienStagiaire, ':evalStagiaire'=>'5', ':confPilote'=>$this->confPilote));
    }
}
?>

