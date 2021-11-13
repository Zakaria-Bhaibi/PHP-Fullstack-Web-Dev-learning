<!-- Define Global Variable and Compare it With Local Variable -->
<?php
    //Sample 1
    
    //Define A global variable
    global $name;

    //Assigning The Global Variable
    $name  = 'zakaria';

    
    function print_name(){
        $name = 'PHP ';
        echo $name;
    }
    print_name();
    echo $name;