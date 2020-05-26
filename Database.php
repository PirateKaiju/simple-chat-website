<?php

    class Database{

        public $conn = null;
        public $db_file = 'sqlite:chat_db.sqlite';

        public function __construct(){

            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

            $this->conn = new PDO($this->db_file, NULL, NULL, $options);
        }

        //One way queries
        public function execute($stmt, $params = []){

            $stmt = $this->conn->prepare($stmt);

            if($params){
                //var_dump($params); //TEST
                $stmt->execute($params);
                //var_dump($stmt); //TEST
            }else{
                $stmt->execute();
            }

            //var_dump($stmt->errorInfo());

            return $stmt;
        }

        //Queries that demand return
        public function result($stmt, $params = []){

            $stmt = $this->execute($stmt, $params);

            //Fetches as an object

            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        //Queries returning multiple rows 
        public function resultSet($stmt, $params = []){

            $stmt = $this->execute($stmt, $params);

            //Fetches as an array of objects
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }




    }



?>