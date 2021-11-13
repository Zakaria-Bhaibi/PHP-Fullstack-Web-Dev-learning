<!-- Learn About Scope of Variable Using Functions --> 
<?php

    //Sample 1
    $name = 'Zakaria';

    function print_name(){
        $name = 'PHP ';
        echo $name;
    }
    print_name();
    echo $name ,"<br>";

    //Sample 2

    $message = "Welcome To PHP!";
    function print_message(){
        echo $message;
    }
    print_message();


