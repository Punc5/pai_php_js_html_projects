<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje matematyczne PHP - część 2.</title>
</head>
<body>
    <?php
        // Wylosowanie liczby z przedziału od 1 do 10
        $x = rand(1, 10);

        // a)
        $dzialanie_1 = (sqrt(pow($x + 1, 2) + 3) - 2 * $x) / 
                        (3 * pow($x, 2) * pow(pow($x, 2) + 1, 3) + (2 / 3) * $x + 1);
        echo "Wynik działania 1. = " . $dzialanie_1 . "<br>";

        // b)
        $denominator_2 = (abs(pow($x, 2) + 1)) - ((3 * pow($x, 3) - 1) / (2 * pow($x, 2) + 2));
        if ($denominator_2 != 0) {
            $dzialanie_2 = ((sin($x) / (2 * $x)) + (8 * (pow($x, 3) - 1)) / (pow(2 * $x + 1, 8))) / $denominator_2;
            echo "Wynik działania 2. = " . $dzialanie_2 . "<br>";
        } else {
            echo "Działanie 2: Dzielenie przez zero!<br>";
        }

        // c)
        $denominator_3 = 2 * abs(pow($x, 2) - 1);
        if ($denominator_3 != 0 && (3 * $x + 2) != 0) {
            $dzialanie_3 = (sqrt(2 * sqrt(pow(pow($x, 2) - 1, 2))) + 2 * pow($x, 2)) / 
                            $denominator_3 - ((8 * (pow($x, 2) - 1)) / (3 * $x + 2));
            echo "Wynik działania 3. = " . $dzialanie_3 . "<br>";
        } else {
            echo "Działanie 3: Dzielenie przez zero!<br>";
        }

        // d)
        $denominator_4 = ((5 * pow($x, 2) - 1) / (pow(3 * $x, $x - 1)) + 2 * pow($x, 2));
        if ($denominator_4 != 0) {
            $dzialanie_4 = (5 * pow($x, 2) - pow(cos($x), 2) - 3 * $x) / $denominator_4 - 2 * pow($x, 3);
            echo "Wynik działania 4. = " . $dzialanie_4 . "<br>";
        } else {
            echo "Działanie 4: Dzielenie przez zero!<br>";
        }
    ?>
</body>
</html>