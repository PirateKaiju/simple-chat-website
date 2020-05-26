<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Simple Chat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--<link rel='stylesheet' type='text/css' media='screen' href='main.css'>-->
    
</head>
<body>

    <div id='msgs'>
        

    </div>

    <br><br>

    <!--<form action="insertHandler.php" class="" id='formMsgs' method="POST">
        <input type='text' name='message' value=''>
        <input type='submit' value='Enviar'>
    </form>-->

    <div>
        <input type='text' name='message' value='' id="messageField">
        <input type='submit' value='Enviar' onclick="sendMessageField()">
    </div>

    

    
    <script src='main.js'></script>
</body>
</html>