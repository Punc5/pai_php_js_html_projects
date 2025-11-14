<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 9.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: pi * i + 3 / n = 1 + 3 / n * 2 + 3 / n * 3 + 3 / n * ...
    $suma = 0;
    $n = rand(2, 10);

    for ($i = 1; $i <= $n; $i++) {
        $suma += ($i + 3);
    }

    $wynik = $suma + $M_PI;

    echo "Wartość = " . $wynik; 
    ?>
</body>
</html>
