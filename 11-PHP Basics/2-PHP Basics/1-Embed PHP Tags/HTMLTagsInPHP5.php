<!-- Write Javascript alert with PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
    <!-- Sample 5-->
    <script>
        <?=
            "alert('I am coming from PHP')";
        ?> 
    </script>
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

    <!-- Sample 3 -->
<!--
    <p style="color: red;">Sample 3: This is a red Text!</p>
-->
<p <?='style="color: red;"'?>>Sample 3: This is a red Text!</p>

    <!-- Sample 4 -->
    <?= "<p>" ?>
        Sample 4: This Text is Printed from PHP!
    <?= "<p>" ?>

</body>
</html>