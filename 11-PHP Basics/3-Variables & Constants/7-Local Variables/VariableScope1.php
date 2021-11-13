<!-- Understand local Variable Concept -->
<?php

    //Sample 1
    $name = 'Zakaria';

    function print_name(){
        $name = 'PHP ';
        echo $name;
    }
    print_name();
    echo $name;