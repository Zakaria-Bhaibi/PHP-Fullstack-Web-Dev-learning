<!-- Define two string characters and print the area --> 

<?php 

    //Sample 1

    $lenght = 10;
    $breath = 20;
    $area = $lenght * $breath;

    echo "Area:$area"; "<br>";

    //Sample 2
    $lenght = "10";
    $breath = 20;
    $area = $lenght * $breath;

    echo "Area:$area";

    //Sample 3

    $lenght = "a";
    $breath = "10";
    $area = $lenght + $breath; 

    echo "Area:$area";
    /* Be carefull with typing so you can't do operation on string with string */