<!-- Recap all Constants -->
<?php
//Define Constant
    define ('LANGUAGE',"PHP");

//Do no redefine the constant
    define ('LANGUAGE',"JAVA");

//Do not use same variable and Constant names

$name = "Jhon, Smith";
define('name',"John, smith");
echo $name . name;

//Assign Constant to Variable and print inside the string
$lang = LANGUAGE;
echo "this is a language : $lang";

//Magic constant

echo __LINE__;