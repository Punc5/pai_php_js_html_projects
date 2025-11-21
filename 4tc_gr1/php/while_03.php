<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - część 3.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli while wyznaczysz wartość wyrażenia: 2 + 4 + 6 + 8 + 10 + ... / 2 * 6 * 10 * 14 * 18 * ...

        $suma = 0;
        $iloczyn = 1;

        $i = 2;
        $j = 2;

        $n = rand(2, 16);

        while ($i <= $n) {
            $suma += $i;
            $i += 2;
        }

        while ($j <= $n) {
            $iloczyn *= $j;
            $j += 4;
        }

        $wynik = $suma / $iloczyn;

        echo "suma = " .$suma. "<br>";
        echo "iloczyn = " .$iloczyn. "<br>";
        echo "wynik = " .$wynik. "<br>";
    ?>
</body>
</html>