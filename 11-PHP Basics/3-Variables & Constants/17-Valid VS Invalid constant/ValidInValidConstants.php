<!-- Good Practice for Constants -->
<?php

    //Good practice 1: Always use UPPERCASE to define constants

    define('LANGUAGE',"PHP");
    define('VERSION',7.3);

    //Good practice 2 : Do not use constants like _CONSTANTS_

    define('__CONSTANT__',"Wrong Practice");

    //Good Practice 3 : Avoid same name as Variable

    $name = "Zakaria, Bhaibi";
    define ('NAME',"ZAKARIA, BHAIBI");

    //Good practice : Use the same naming convention
    // Do not start variable or constant name with integers

