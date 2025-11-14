<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 6.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: 1 + 2 + 3 + 4 + 5 + ... / 2 * 6 * 10 * 14 * 18 * ...
    $suma = 0;
    $iloczyn = 1;
    $n = rand(2, 10);

    $p = 1;
    $q = 2;

    for ($i = 1; $i <= $n; $i++) {
        $suma += $p;
        $p++;
    }

    for ($i = 1; $i <= $n; $i++) {
        $iloczyn *= $q;
        $q += 4;
    }

    echo "Wartość = " .$suma / $iloczyn;
    ?>
</body>
</html>