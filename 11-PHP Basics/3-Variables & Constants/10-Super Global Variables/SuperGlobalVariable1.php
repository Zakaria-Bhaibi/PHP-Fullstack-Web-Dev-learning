<!-- How To use Super Global Variables -->
<?php
    //Sample 1 - $GLOBALS
    global $message;
    $message = "Welcome to PHP!";
    echo $GLOBALS['message'] . "<br>";

    //$GLOBALS To Access All global variables in the code