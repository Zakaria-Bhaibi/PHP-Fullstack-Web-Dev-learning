<!-- Predefined Super Global Variables -->
<?php
 //Sample 1 - $GLOBALS
 global $message;
 $message = "Welcome to PHP!";
 echo $GLOBALS['message'] . "<br>";

 /*$GLOBALS To Access All global variables in the code*/



    //Sample 2 --$_SERVER['PHP_SELF'] to get the File Name
    echo "Filename : " . $_SERVER['PHP_SELF'] . '<br>';
