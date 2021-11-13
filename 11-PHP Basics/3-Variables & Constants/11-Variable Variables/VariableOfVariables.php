<!-- How To Use Variable Of Variables -->
<?php

    //Example 1

    $male = "John, Smith"; //male is a variable
    $gender = "male";   // gender is holding a variable name


    echo $gender;
    echo $$gender; // $($gender) ==> $(male)

    echo "<br>";


    //Example 2

    $student = "John, smith";
    $male = "student";
    $gender = "male";

    echo $gender,"<br>";
    echo $$gender,"<br>";
    echo $$$gender,"<br>";