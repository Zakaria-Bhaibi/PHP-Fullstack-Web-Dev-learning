<?php

    //1- Creating string variable
    $name = "Zakaria";

    //2- Creating integer variable
    $age = 22;

    //3- Printing variable from function
    function age(){
        $age = 22;
        echo $age ."<br>";
    }
    age();

    //4- Static variable

    static $var1 = "static";

    //5- Global Variable
    global $var2;
    $var2 = "Global";

    //6- Super Global variable

      echo  $GLOBALS["version"];

    //7- Variables of variables

    $name = "zakaria";
    $nom = "name";
    
    echo $$nom;

