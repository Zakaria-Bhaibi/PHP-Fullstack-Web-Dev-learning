// Onclick is not working with external javascript files


function checkformdata(){
    //Query all elements that tag name is input
    var inputs = document.getElementsByTagName("input");

    var message = "Form Elements \n \n";

    for (var i=0 ; i< inputs.length;i++){

        if (inputs[i].getAttribute('type') == 'text'){
            message += inputs[i].getAttribute('name') + ":";
            message += inputs[i].value + "\n";
        }
    }

    alert(message);
    alert(document.getElementById('name1').value);
    alert(document.getElementById('name2').value);



}