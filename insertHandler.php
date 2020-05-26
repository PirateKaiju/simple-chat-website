<?php

    require_once 'Message.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $chat = new Message();//A better approach?

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        //file_put_contents("log.txt", print_r($_POST));//Trick

        //var_dump($_POST);

        //file_put_contents("log.txt", 'teste');//Trick

        //CHANGE idUser and idChat
        $data = [
            'messageIn' => trim($_POST["newMsg"]),
            'idUserIn' => 2,
            'idChatIn' => 1
        ];

        $chat->insertMsg($data);

        //header('location: http://localhost:8000/index.php');


    }


?>