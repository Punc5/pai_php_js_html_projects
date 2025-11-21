<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while - część 2.</title>
</head>
<body>
    <?php
        // Napisz skrypt, który będzie obliczał iloczyn z wylosowanych liczb z przedziału od 1 do 5.
        // Losowanie liczb powinno zakończyć się w momencie kiedy wartość iloczynu przekroczy 10000.
        // Wyświetl ilość wylosowanych liczb oraz iloczyn.

        $iloczyn = 1;
        $liczby = 0;
        do {
            $liczba = rand(1, 5);
            if ($liczba !== 0) {
                $iloczyn *= $liczba;
                $liczby++;
            }
        } while ($iloczyn <= 10000);

        echo "iloczyn = " . $iloczyn . "<br>";
        echo "ilość wylosowanych liczb = " . $liczby . "<br>";
    ?>
</body>
</html>
