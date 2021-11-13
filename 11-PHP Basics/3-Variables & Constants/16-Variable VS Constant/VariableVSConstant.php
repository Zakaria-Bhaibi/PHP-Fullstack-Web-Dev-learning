<!-- Difference between variable and constant --> 
<?php

    /*
        1) No need to use $ to use the constant
        2) Constant are defined only via the difene method
        3) Value can be assigned only once
        4) Consant has globale scope. Can acess anywhere
        5) Constant can be used to access the constants
    */

    $name = "John, Smith";
    define("name", "John, Smith");
    echo $name . name;

    //Able to change Variable but not constant

    $name = "Walter, White";
    define("name","Walter,White");
    echo $name . name;

    echo "<hr>";

    function print_constant(){
        echo $name . constant('name');
    }

    print_constant();
