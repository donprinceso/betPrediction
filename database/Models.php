<?php
require_once  'config.inc.php';
class Model {
    private $dbhost ;
    private $dbuser ;
    private $dbpassword ;
    private $dbname ;
    public $CONN;
    private $charset="utf8";
     public $error;
    public $ERROR_TEXT = "";
    
    public function __construct() {
        $this->connect();
    }

    protected function connect(){
        $this->dbhost=db_host;
        $this->dbuser=db_user;
        $this->dbpassword=db_pass;
        $this->dbname=db_name;
        try{
        $pdo_db = "mysql:host=".$this->dbhost.";dbname=".$this->dbname.";charset=".$this->charset;
        $this->CONN = new PDO($pdo_db, $this->dbuser, $this->dbpassword);
        $this->CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->CONN;
        }
        catch (PDOException $e ){
            echo $e->getMessage();
        }
    }
    // display the error and the message in it
    public function geterror(){
        if($this->error !==0){
            echo '<span>'.$this->ERROR_TEXT.'</span>';
            return TRUE;
        }
    }

}