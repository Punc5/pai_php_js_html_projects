<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - część 4.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli while wyznaczysz wartość wyrażenia: -2 + 7 - 12 + 17 - 22 + ... / 3 * (-7) * 11 * (-15) * 19 * ...

        $suma = 0;
        $iloczyn = 1;

        $i = 2;
        $j = 3;

        $n = rand(2, 16);

        while ($i <= $n) {
            if($i % 2 == 0) {
                $i += 5;
                $i *= -1;
            }

            $suma += $i;
        }

        while ($j <= $n) {
            if ($j % 2 != 0) {
                $iloczyn *= -($j);
            } else {
                $iloczyn *= $j;
            }
        }

        $wynik = $suma / $iloczyn;

        echo "suma = " .$suma. "<br>";
        echo "iloczyn = " .$iloczyn. "<br>";
        echo "wynik = " .$wynik. "<br>";
    ?>
</body>
</html>