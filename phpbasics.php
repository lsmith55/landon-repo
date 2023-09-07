<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $yourName = "Landon";
    ?>

    <h1>Assignment Name: <?php echo $yourName; ?></h1>
    <h2><?php echo $yourName; ?></h2>
    <?php 

    $number1 = 10;
    $number2 = 5;
    $total = $number1 + $number2;

    echo "<p>number1: $number1</p>";
    echo "<p>number2: $number2</p>";
    echo "<p>Total: $total</p>";
    
    $languages = ['PHP', 'HTML', 'JAVASCRIPT'];
    echo '<script>';
    echo 'var jsLanguages = ' . json_encode($languages) . ';';
    echo '</script>';
    
    ?>
    <script>
        document.write("<h2>Languages:</h2>");
        document.write("<ul>");
        for (var i = 0; i < jsLanguages.length; i++) {
            document.write("<li>" + jsLanguages[i] + "</li>");
        }
        document.write("</ul>");
    </script>

    
</body>
</html>