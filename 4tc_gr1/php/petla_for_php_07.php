<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 7.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: 2 * 2,5 * 3 * 3,5 * 4 * 4,5 / -3 * (-0,3) * (-0,03) * (-0,003) * ...
    $iloczyn_1 = 1;
    $iloczyn_2 = 1;

    $n = rand(2, 10);

    $p = 2;
    $q = -3;

    for ($i = 1; $i <= $n; $i++) {
        $iloczyn_1 *= $p;
        $p += 0.5;
    }

    for ($i = 1; $i <= $n; $i++) {
        $iloczyn_2 *= $q;
        $q *= 0.1;
    }

    echo "Wartość = " . ($iloczyn_1 / $iloczyn_2); 
    ?>
</body>
</html>