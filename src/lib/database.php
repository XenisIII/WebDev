<?php class Database{
    private $db_dsn;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name="BDD_Projet",$db_user ='Erwan',$db_pass='rootroot',$db_host='dominancea2.ddns.net'){
        $this->db_dsn=$db_name;
        $this->db_user=$db_user;
        $this->db_pass =$db_pass;
        $this->db_host=$db_host;
        $this->pdo =new PDO("mysql:host=$this->db_host;dbname=$this->db_dsn",$this->db_user,$this->db_pass);
    }

    public function getPDO(){
        return $this->pdo;
    }

    public function Query($statement){
        try{
        $tmp_=$this->pdo->query($statement)->fetchAll(PDO::FETCH_OBJ);
        $this->pdo->query($statement)->closeCursor();
        return $tmp_;}
        catch(PDOException $e){
            print_r($e->getMessage()."<br>");
            die();
        }
    }

    public function execute($statement,$params=array()){
        $tmp_=$this->pdo->prepare($statement,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $tmp_->execute($params);
        return($tmp_->fetch(PDO::FETCH_OBJ));

    }
    public function executeAll($statement,$params=array()){
        $tmp_=$this->pdo->prepare($statement,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $tmp_->execute($params);
        return($tmp_->fetchAll(PDO::FETCH_OBJ));

    }
    
    public function executeAll($statement,$params=array()){
        $tmp_=$this->pdo->prepare($statement,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $tmp_->execute($params);
        return($tmp_->fetchAll(PDO::FETCH_OBJ));
    }
    /*public function executeCount($statement,$params=array()){
        $tmp_=$this->pdo->prepare($statement,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $tmp_->execute($params);
        return($tmp_->columnCount());
    }*/
}
?>