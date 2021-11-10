<?php 

class Database {
    private $dbh, $statement;

    public function __construct(){
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, DB_USER, DB_PASS, $option);
        } catch (PDOException $err){
            die($err->getMessage());
        }
    }

    public function query( $query ){
        $this->statement = $this->dbh->prepare($query);

    }
    public function bind($key, $value, $type=null){
        if ( is_null($type) ){
            if ( is_int($value) ) {
                $type = PDO::PARAM_INT;
            } else if ( is_bool($value) ) {
                $type = PDO::PARAM_BOOL;
            } else if ( is_null($value) ){
                $type = PDO::PARAM_NULL;
            } else {
                $type = PDO::PARAM_STR;
            }

            $this->statement->bindValue($key, $value, $type);
        }
    }

    public function execute(){
        $this->statement->execute();
    }

    public function fetchAllData(){
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchSingleData(){
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function affectedRow(){
        return $this->statement->rowCount();
    }
}