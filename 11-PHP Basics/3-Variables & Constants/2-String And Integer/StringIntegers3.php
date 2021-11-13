<!--Add Two Numbers with Integer Variable -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>
<body>
    <!-- Sample 1 -->
    <h1>Define Strings</h1>
    <?php
        $name = "John, Smith";
        $message = "This is A string message";
        echo $name , ": " , $message ;
        echo "$name: $message"
    ?>

    <h1>Define Integers</h1>
    <?php 
        $version = 7.5;
        echo "PHP Version is $version";
    ?>
    <!-- Sample 2 -->
    <h1>Combine String And Integer</h1>
    <?php 
        echo "$name : $message<br>";
        echo "name : $name <br>";
        $language = "PHP <br>";
        echo $language . "Version is ", $version;

    ?>
    <!-- Sample 3 -->
    <h1>Add Two values</h1>
    <?php
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue + $secondvalue;
        echo "Total : ", $total;
    ?>
</body>
</html>