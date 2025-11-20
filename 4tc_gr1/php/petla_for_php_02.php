<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 2.</title>
</head>
<body> 
    <?php
    // Generuj ciąg parzystych liczb
    $k = 2;
    $n = rand(2, 10);

    for ($i = 1; $i <= $n; $i++) {
        echo $k;
        if ($i < $n) {
            echo ", ";
       } 
        $k += 2;
    }  
    ?>
</body>
</html>