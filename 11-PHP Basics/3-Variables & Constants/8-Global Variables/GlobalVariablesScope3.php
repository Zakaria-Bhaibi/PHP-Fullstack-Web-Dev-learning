<!-- Right Way To access Global Variable inside the Function -->
<?php
//Sample 1
    
    //Define A global variable
    global $name;

    //Assigning The Global Variable
    $name  = 'zakaria';

    
    function print_name(){
        $name = 'PHP ';
        echo $name;
    }
    print_name();
    echo $name,'<br><br><br>';

//Sample 2

    global $message;
    $message = "Welcome To PHP!";

    function print_message(){
        echo $message;
        //Function is not recognizing the variable even if it is global
    }
    print_message();
    echo $message,'<br><br><br>';


//Sample 3
    global $message1;
    $message1 = "Welcome To PHP!";

    function print_message1(){
        global $message1;
        $message1 = "This value changed from the function";
        echo $message1,'<br>';
    }
    print_message1();
    echo $message1;
