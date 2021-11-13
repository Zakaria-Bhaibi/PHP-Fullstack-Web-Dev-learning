<!--Define a String and Integer Variable -->
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
</body>
</html>