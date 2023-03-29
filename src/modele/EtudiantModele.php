<?php


require_once(__DIR__."/../lib/database.php");

class EtudiantModele{
    private $db;
    function __construct(){
        $this->db= new Database();
    }
    public function getAllById($id){
        $statement="SELECT u.id_utilisateur, u.nom_utilisateur, u.prenom_utilisateur, u.login, u.mdp, e.id_eleve, e.CV, e.id_classe, s.id_statut, s.statut FROM 
        (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
        INNER JOIN Statut s on e.id_statut = s.id_statut WHERE e.id_eleve = :id;";
        return $this->db->executeAll($statement,array(':id'=>$id));
    }
    public function getPromoById($id){
        $statement="SELECT * from (Select id_utilisateur from Utilisateur where id_utilisateur=$id)a natural join Eleve  natural join Classe natural join Centre ";
        return $this->db->Query($statement);
    }
    public function getAllByStatut($statut){
        $statement="SELECT u.id_utilisateur, u.nom_utilisateur, u.prenom_utilisateur, u.login, u.mdp, e.id_eleve, e.CV, e.id_classe, s.id_statut, s.statut FROM
         (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
         INNER JOIN Statut s on e.id_statut = s.id_statut WHERE s.statut = :statut ;";
        return $this->db->executeAll($statement,array(":statut"=>$statut));
    }
    public function getAllRechercheByIdTuteur(){
        $statement="SELECT *
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            AND e.id_statut = (SELECT DISTINCT s.id_statut FROM 
            Eleve e INNER JOIN Statut s on e.id_statut = s.id_statut 
            WHERE s.statut = 'En recherche') 
            ;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }
    public function getCountByStatutByIdTuteur($statut){
        $statement="SELECT count(e.id_utilisateur) AS nb_eleve
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            AND e.id_statut = (SELECT DISTINCT s.id_statut FROM 
            Eleve e INNER JOIN Statut s on e.id_statut = s.id_statut 
            WHERE s.statut = :statut) 
            ;";
        return $this->db->executeall($statement,array(":statut"=>$statut, ":sess"=>$_SESSION['user_id']));
    }
    public function getCountAll(){
        $statement="SELECT Count(e.id_eleve) AS nb_eleve
        FROM Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            )
            ;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }
    public function ChangeStatut($id_offre,$id_user,$id_statut){
        $statement="INSERT INTO Postule(id_offre,id_eleve,id_statut) VALUES($id_offre,$id_user,$id_statut)";
        $this->db->Query($statement);
    }
    public function getFavById($id_user){
        $statement="SELECT id_offre from Postule WHERE id_eleve in(SELECT id_eleve from Eleve where id_utilisateur=$id_user) and id_statut=5";
        return $this->db->Query($statement);
    }
    public function getAllFavByID($id_user){
        $statement="SELECT * from Postule natural join Offre natural join Localite natural join Entreprise WHERE id_eleve in(SELECT id_eleve from Eleve where id_utilisateur=$id_user) and id_statut=5";
        return $this->db->Query($statement);
    }
    public function getIdEleveByID($id_user){
        $statement="SELECT id_eleve from Eleve where id_utilisateur=$id_user";
        return $this->db->Query($statement)[0]->id_eleve;
    }

    public function getAllByIdTuteur(){
        $statement="SELECT *
        FROM (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
        INNER JOIN Statut s on e.id_statut = s.id_statut
        WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess
            ) 
            ) ORDER BY e.id_statut DESC
            ;";
        return $this->db->executeAll($statement,array(":sess"=>$_SESSION['user_id']));
    }
    public function getAllStudentLike($id,$search){
        $statement="select * from (SELECT id_classe from (SELECT * from Tuteur where id_utilisateur=2)a natural join Pilote natural join Classe )b natural join Eleve natural join Utilisateur natural join Postule natural join Statut where nom_utilisateur like :search or prenom_utilisateur like :search ";
        return $this->db->executeAll($statement,array(":search"=>"%".$search."%"));}

    public function getAllByIdTuteurByFiltre($filtre){
        $statement="SELECT *
        FROM (Eleve e INNER JOIN Utilisateur u on e.id_utilisateur = u.id_utilisateur) 
        INNER JOIN Statut s on e.id_statut = s.id_statut
        WHERE (
            e.id_classe = (SELECT c.id_classe FROM (
            Classe c INNER JOIN Pilote p on c.id_classe = p.id_classe)
            INNER JOIN Tuteur t on p.id_tuteur = t.id_tuteur
            WHERE t.id_utilisateur = :sess AND :filtre
            ) 
            ) ORDER BY e.id_statut DESC
            ;";
        return $this->db->executeAll($statement,array(":filtre"=>$filtre, ":sess"=>$_SESSION['user_id']));
    }
    public function countAllOfferById($id){
        $statement="SELECT * FROM (Select id_eleve from Postule where id_statut<5)a natural join Eleve where id_eleve=$id;";
        return count($this->db->Query($statement));
    }
    public function countRefusedOfferById($id){
        $statement="SELECT * FROM (Select id_eleve from Postule where id_statut=4)a natural join Eleve where id_eleve=$id;";
        return count($this->db->Query($statement));
    }
    public function countWaitingOfferById($id){
        $statement="SELECT * FROM (Select id_eleve from Postule where id_statut=1)a natural join Eleve where id_eleve=$id;";
        return count($this->db->Query($statement));
    }
    public function modifyNameById($id,$name){
        $statement="UPDATE Utilisateur SET nom_utilisateur='$name' where id_utilisateur=$id";
        return $this->db->Query($statement);
    }
    public function modifyPrenomById($id,$prenom){
        $statement="UPDATE Utilisateur SET prenom_utilisateur='$prenom' where id_utilisateur=$id";
        return $this->db->Query($statement);
    }
    public function deleteById($id){
        $statement="UPDATE Utilisateur SET prenom_utilisateur='DELETED_USER-$id' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Utilisateur SET nom_utilisateur='DELETED_USER-$id' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Utilisateur SET login='' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Utilisateur SET mdp='' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Eleve SET CV='' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Eleve SET id_classe='' where id_utilisateur=$id";
        $this->db->Query($statement);
        $statement="UPDATE Eleve SET id_statut='' where id_utilisateur=$id";
        $this->db->Query($statement);
    }
    public function isStatued($id_offre,$id_student){
            $statement="SELECT * from Utilisateur natural join Postule where id_offre=$id_offre and id_eleve=$id_student";
            if(count($this->db->Query($statement))>=1){
                return true;
            }
            return false;
        }

    public function UpdateStatut($id_offre,$id_student,$id_statut){
            $statement="UPDATE Postule SET id_statut=$id_statut where id_eleve=$id_student and id_offre=$id_offre";
            $this->db->Query($statement);
        }
    }

?>