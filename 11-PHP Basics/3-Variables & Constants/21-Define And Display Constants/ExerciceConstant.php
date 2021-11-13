<?php

    //1- String Constant

        define('CONST1',"Zakaria");

    //2- Integer Constant
        define('CONST2', 10);

    //3-Print Constant from a function

        function const_print(){
            define('FULLNAME', 'zakaria bhaibi');
            echo FULLNAME;
        }

        const_print();

    //4- Display magic constant
        echo __LINE__;

        
        