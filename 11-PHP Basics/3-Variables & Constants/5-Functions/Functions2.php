<!-- Duplicate Functions -->
<?php
    //Sample 1
    //Declaring a function
    function add(){
        //Function Body
        $firstvalue = 10;
        $secondvalue =10;
        $total = $firstvalue + $secondvalue;
        echo $total;
    }

    //Calling the Function
    add();


    //Sample 2
    function add(){
        echo 'Duplicate Function';
        //You can not Create 2 functions with the same name it will error out
    }