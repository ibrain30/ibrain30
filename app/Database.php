<?php
 namespace App;
 use \PDO;
 /**
  * classe Database
  */
  class Database{
    /**
     * @var les elements de la classe database 
     */
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;
    /**
     * constructeur de la classe Database 
     */
    public function __construct($db_name,$db_user='root',$db_password='root',$db_host='localhost'){

        $this->$db_name = $db_name;
        $this->$db_user = $db_user;
        $this->$db_password = $db_password;
        $this->$db_host = $db_host;
       }
       /**
        * fonction qui nous permet d'initiliser notre connection
        */

   private function getPDO(){
     
        if($this->pdo == null){

          $pdo = new PDO('mysql:dbname=blog;host=localhost','root','root');
          $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $this->pdo = $pdo;
          
        }
          return $this->pdo;
   }
   /**
    * @param $statement la requette a execute 
    * @return $data les donne a retourne 
    */

   public function query($statement,$class_name){

        $req=$this->getPDO()->query($statement);
        $data=$req->fetchAll(PDO::FETCH_CLASS,$class_name);
        return $data;

   }

  }

?>