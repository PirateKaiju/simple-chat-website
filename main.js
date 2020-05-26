//Substituir form por botao e onclick

function sendMessageField(){

    let data = document.getElementById('messageField').value;

    document.getElementById('messageField').value = "";

    newMessage(data);

}

function newMessage(data){

    let xhttp = new XMLHttpRequest();


    /*xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            

        }
    };*/


    xhttp.open("POST", "insertHandler.php", true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //alert("message="+data);

    xhttp.send(encodeURI("newMsg=" + data));


}

function refreshMessages(){
    //PASS ID HERE
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            document.getElementById("msgs").innerHTML = this.responseText;

        }
    };

    //PASS ID HERE
    xhttp.open("GET", "showHandler.php", true);
    xhttp.send();


}

setInterval(refreshMessages, 2000);