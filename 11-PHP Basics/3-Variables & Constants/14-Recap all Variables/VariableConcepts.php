<?php
    //Define a Variable
        $name = "john , smith";
    
    //Variable can be used as String and Integer
        $message = 1;
        $message = "PHP is the best!";
        echo $message ."<br>";

    //Print Variable with double quotes
        echo "Name variable = $name " . "<br>";
        echo 'Name variable = $name' . "<br>";


    //Variable Typing converting the string to integer and vice versa

        $length = "10";
        $breath = 20;
        $area = $length * $breath ;
        echo "Area : $area" . "<br>";


    //Variable is Case sensitive

        $Name = "Walter White";
        echo "$name is not equal to $Name" . "<br>";


    //Variable Scope

        $counter = 1;
        function show_counter(){
            $counter = 2;
            echo $counter;
        }
        show_counter();
        echo $counter . "<br>";

    //Global Variables
        
        global $count;
        $count = 1;
        function show_count(){
            global $count;
            $count = 2;
            echo $count . "<br>";
        }
        show_count();
        echo $count . "<br>";

    //Static Variables
        function counter_static(){
          static $count = 1;
          echo $count . "<br>";
          $count = $count +1;
      }
      counter_static();

    //Predefined Variables
      function print_global_variables(){
          echo $GLOBALS['count'] ."<br>";
      }
      print_global_variables();
    //Variable Of variables
        $countofcount = "count";
        echo $$countofcount;

    //isset function

        echo isset($$countofcount) ? "Variable is set ":"Variable is not set";    