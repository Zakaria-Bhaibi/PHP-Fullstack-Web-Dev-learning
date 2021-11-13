<!-- How To check if the variable is used or not -->

<?php
    //Empty variable
        $name;
        echo $name;

    //Ternary Operator
    echo isset($name) ? "Variable Set" : "Variable is not Set"; // ? False : True 
    echo "<br>";

    $name = "John , Smith";
    echo isset($name) ? "Variable Set" : "Variable is not Set"; 
   echo "<br>";
   
   
    $firstname = "test";
    $name= $firstname;
    echo isset($name) ? "Variable Set" : "Variable is not Set";  


