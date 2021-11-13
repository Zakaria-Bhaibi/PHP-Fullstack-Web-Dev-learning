<!-- isset method for constant -->
<?php
    //Sample 1
    //Define constant
      //  define(name of constant,value of the constant); try always to make it uppercase

use JetBrains\PhpStorm\Language;

define("LANGUAGE","PHP");
        $lang = LANGUAGE;

    echo "this program is written ising $lang <br>";
    echo "this program is written ising LANGUAGE <br>";
    echo "this program is written ising". LANGUAGE. "<br>";

    //Sample 2

   // define("LANGUAGE","JAVA");
    echo "this program is written ising". LANGUAGE. "<br>";
    // the constant value doesnt change


    //Sample 3
    $LANGUAGE = "JAVA";
    echo "this program is written ising". $LANGUAGE. "<br>";
    echo "this program is written ising". LANGUAGE. "<br>";

    //Sample 4
    /* define("1VERSION",7.3);
    echo 1VERSION; */

    //sample 5
    /*
    define("NAME","");
    echo isset(NAME);
    echo NAME;
    */
    // You cannot use isset for constants

    //Access constant using the constant method

    echo constant('LANGUAGE');
    

