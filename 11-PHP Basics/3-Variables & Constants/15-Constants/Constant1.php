<!-- Define and Use a constant -->

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
