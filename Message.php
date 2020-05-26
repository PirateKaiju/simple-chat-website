<?php

    require_once 'Database.php';

    class Message{

        public function __construct(){

            $this->db = new Database();
            
        }

        public function insertMsg($data){

            $stmt = $this->db->execute( "INSERT INTO messages (idUser, idChat, messagetxt) VALUES (:idUserIn, :idChatIn, :messageIn)", $data);

            //$stms = "INSERT INTO messages (idUser, idChat, messagetxt) VALUES (:idUserIn, :idChatIn, :messageIn)";





        }

        public function getChat($data){

            //CHANGE
            $params = [
                'idChatT' => 1 
            ];

            $result = $this->db->resultSet("SELECT * FROM messages WHERE idChat = :idChatT", $params);
            return $result;




        }




    }



?>