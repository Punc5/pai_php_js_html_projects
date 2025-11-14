<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 2.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for wyświetlisz ciąg w postaci: 2, 4, 6, 8, 10, 12,...
        $k = 2;
        $n = rand(2, 10);

        for ($i = 1; $i <= $n; $i++) {
            echo $k. ", ";
            $k = $k + 2;
        }  
    ?>
</body>
</html>