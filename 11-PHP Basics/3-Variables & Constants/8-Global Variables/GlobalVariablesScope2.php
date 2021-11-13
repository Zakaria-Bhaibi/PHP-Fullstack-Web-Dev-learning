<!-- Error Accessing global Variable inside the function -->
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
    echo $name,'<br>';

//Sample 2

    global $message;
    $message = "Welcome To PHP!";

    function print_message(){
        echo $message;
        //Function is not recognizing the variable even if it is global
    }
    print_message();
    echo $message;