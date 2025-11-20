<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 8.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: sigma * 3 + k / 2k = 3 + 3 / 2 * 3 + 3 + 6 / 2 * 6 + 3 + 12 / 2 * 12 + 3 + 24 / 2 * 24 + ...
    $suma = 0;
    $n = rand(2, 10);

    $k = 2;

    for ($i = 1; $i <= $n; $i++) {
        $suma += (3 + $k) / (2 * $k);
        $k *= 2;
    }

    echo "Wartość = " . $suma; 
    ?>
</body>
</html>