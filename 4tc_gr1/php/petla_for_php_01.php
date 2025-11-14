<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 1.</title>
</head>
<body> 
    <?php
        for ($i = 1; $i <= 10; $i++) {
            $x = rand(8, 30);
            echo $x. ", ";
        } 
    ?>
</body>
</html>