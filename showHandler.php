<?php


        
    require_once 'Message.php';

    $chat = new Message();

    //CHANGE:Pass chat id here
    $messages = $chat->getChat([]);

    //var_dump($messages);

    foreach($messages as $chatMsg){
        echo "<p>". $chatMsg->idMsg . " - ". $chatMsg->messagetxt."<p> <br>";
    }
    
/*foreach($messages as $chatMsg):


<p><?php echo $chatMsg->messagetxt; ?></p><br>

<?php endforeach;?>*/



?>