<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 9</title>
</head>
<body>
    <h2>Obliczanie sumy: Σ(π·i + 3/n) dla i = 1 do n</h2>
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: pi * i + 3 / n = 1 + 3 / n * 2 + 3 / n * 3 + 3 / n * ...
    $suma = 0;
    $n = rand(2, 10);

    for ($i = 1; $i <= $n; $i++) {
        $wyraz = M_PI * $i + 3 / $n;
        $suma += $wyraz;
        echo "<li>i = $i: π × $i + 3/$n = " . number_format($wyraz, 4) . "</li>";
    }

    echo "</ul>";
    echo "<p><strong>Wynik końcowy:</strong> " . number_format($suma, 4) . "</p>";
    ?>
</body>
</html>   