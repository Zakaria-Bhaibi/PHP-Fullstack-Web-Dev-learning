var message ="";
        var answer = 7;
        var counter =0;
        var flag = false;
        do{
            var input1 = prompt("Guess the number from 1 to 20");
            input1 = parseInt(input1);
            if(input1 != answer){
                alert("Nope - Wrong !");
                counter++;
            }else{
                flag = true;
                break;
            }
            if(counter==3){
                break;
            }
        }while(answer != input1);
        if(flag){
            message += "You Guessed it right " + answer + " is the answer.";

        }else{
            message += "Sorry Better Try Again!";

        }