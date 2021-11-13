<!-- Print HTML Tags and Text With PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>
<body>
    <h1>Embed PHP in HTML</h1>
    <!-- Sample 1-->
    <?php echo "Hello World!" ?>

    <!-- Sample 2-->

    <?php

        print "<p>Sample 1: This text its printed from PHP!</p>";

    ?>
    <?= "<hr>" ?>

    <p>
        <?php
            echo "Sample 2 : This text is printed from PHP!";
        ?>
    </p>
</body>
</html>